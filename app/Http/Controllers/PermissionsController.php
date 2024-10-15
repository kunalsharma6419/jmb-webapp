<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::with('roles')->get();
        return view('admin.pages.permissions', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modalPermissionName' => 'required|string|max:255',
        ]);

        
        $existingPermission = Permission::where('title', $request->modalPermissionName)->first();

        if ($existingPermission) {
            return redirect()->route('permissions.index')->with('error', 'Permission already exists!');
        }

        Permission::create([
            'title' => $request->modalPermissionName,
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'editPermissionName' => 'required|string|max:255',
        ]);

        $permission = Permission::findOrFail($id);

        
        if ($request->editPermissionName !== $permission->title) {
            $existingPermission = Permission::where('title', $request->editPermissionName)->first();
            if ($existingPermission) {
                return redirect()->route('permissions.index')->with('error', 'Permission name already exists!');
            }
        }

        $permission->title = $request->editPermissionName;
        $permission->save();

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully!');
    }



    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete(); 

        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully!');
    }
}


