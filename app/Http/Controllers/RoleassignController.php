<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role; // Make sure Role model is imported
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleassignController extends Controller
{
    public function assignRoles(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'nullable|exists:roles,id', // Only accept valid role IDs
            'status' => 'nullable|in:activated,deactivated,hold', // Validate user status
        ]);

        $user = User::findOrFail($request->user_id);
        $newRoleId = $request->role_id;
        $newStatus = $request->status;

        // Remove all existing roles assigned to the user (soft delete)
        DB::table('role_users')
            ->where('user_id', $user->id)
            ->whereNull('deleted_at') // Only update non-deleted entries
            ->update(['deleted_at' => now(), 'updated_at' => now()]);

        // If a new role is provided, assign or restore it
        if ($newRoleId) {
            // Check if the role exists and was previously soft-deleted
            $existingRole = DB::table('role_users')
                ->where('user_id', $user->id)
                ->where('role_id', $newRoleId)
                ->first();

            if ($existingRole && $existingRole->deleted_at) {
                // Restore the soft-deleted role
                DB::table('role_users')
                    ->where('user_id', $user->id)
                    ->where('role_id', $newRoleId)
                    ->update(['deleted_at' => null, 'updated_at' => now()]);
            } else {
                // Assign the new role if not already assigned
                $user->roles()->attach($newRoleId, ['created_at' => now(), 'updated_at' => now()]);
            }

            // Set 'is_admin' flag based on role ID
            $user->is_admin = ($newRoleId == 1);
        }

        // Update the user's status if provided
        if ($newStatus) {
            $user->profile_status = $newStatus;
        }

        // Save user changes
        $user->save();

        return redirect()->back()->with('success', 'Role and status updated successfully!');
    }
}
