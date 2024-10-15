<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Permission;

class RolesController extends Controller
{
    public function index()
{
    // Fetch users with their active roles
    $users = User::with([
        'roles' => function ($query) {
            $query->select('roles.id', 'roles.title')
                  ->whereNull('role_users.deleted_at');
        }
    ])->get();

    // Fetch roles with their permissions and users
    $roles = Role::with([
        'permissions' => function ($query) {
            $query->select('permissions.id', 'permissions.title')
                  ->whereNull('permission_roles.deleted_at')
                  ->orderBy('permissions.id'); // Sort permissions by ID
        },
        'users' => function ($query) {
            $query->distinct()->select('users.id')
                  ->whereNull('role_users.deleted_at');
        }
    ])->whereNull('roles.deleted_at')->get();

    // Fetch permissions sorted by ID
    $permissions = Permission::orderBy('id')->get(); // Sort permissions by ID

    return view('admin.pages.roles', compact('users', 'roles', 'permissions'));
}


    public function store(Request $request)
    {
        $request->validate([
            'modalRoleName' => 'required|string|max:255|unique:roles,title',
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        try {
            $role = Role::create(['title' => $request->modalRoleName]);

            if (!empty($request->permissions)) {
                $role->permissions()->attach($request->permissions);
            }

            return redirect()->back()->with('success', 'Role added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding the role.');
        }
    }

    public function updateRoles(Request $request, $role_id)
    {
        $request->validate([
            'modalRoleName' => 'required|string|max:255|unique:roles,title,' . $role_id,
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $role = Role::findOrFail($role_id);

        try {
            // Update role title
            $role->update(['title' => $request->modalRoleName]);

            // Manage permissions
            $currentPermissions = \DB::table('permission_roles')
                                     ->where('role_id', $role_id)
                                     ->select('permission_id', 'deleted_at')
                                     ->get()
                                     ->keyBy('permission_id');

            $newPermissionIds = $request->permissions ?? [];

            // Restore previously deleted permissions
            foreach ($newPermissionIds as $permissionId) {
                if (isset($currentPermissions[$permissionId]) && $currentPermissions[$permissionId]->deleted_at !== null) {
                    \DB::table('permission_roles')
                        ->where('role_id', $role_id)
                        ->where('permission_id', $permissionId)
                        ->update(['deleted_at' => null, 'updated_at' => now()]);
                }
            }

            $existingPermissionIds = $currentPermissions->keys()->all();
            $permissionsToAdd = array_diff($newPermissionIds, $existingPermissionIds);

            // Add new permissions
            foreach ($permissionsToAdd as $permissionId) {
                $role->permissions()->attach($permissionId);
            }

            // Mark permissions as deleted
            $permissionsToDelete = array_diff($existingPermissionIds, $newPermissionIds);

            foreach ($permissionsToDelete as $permissionId) {
                if ($currentPermissions[$permissionId]->deleted_at === null) {
                    \DB::table('permission_roles')
                        ->where('role_id', $role_id)
                        ->where('permission_id', $permissionId)
                        ->update(['deleted_at' => now(), 'updated_at' => now()]);
                }
            }

            return redirect()->back()->with('success', 'Role updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating the role.');
        }
    }

    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();

        return view('admin.pages.edit-user', compact('user', 'roles'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'modalRoleName' => 'required|string|max:255|unique:roles,title,' . $role->id,
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        try {
            // Update role title
            $role->update(['title' => $request->modalRoleName]);

            // Update associated permissions
            $this->updateRoles($request, $role->id);

            return redirect()->back()->with('success', 'Role updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating the role.');
        }
    }
}
