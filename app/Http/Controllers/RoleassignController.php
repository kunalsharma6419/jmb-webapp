<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleassignController extends Controller
{
    public function assignRoles(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'nullable|exists:roles,id', // Accept only one role
            'status' => 'nullable|in:activated,deactivated,hold', // Validate user status
        ]);

        $user = User::findOrFail($request->user_id);
        $newRoleId = $request->role_id;
        $newStatus = $request->status; // Get the status from the request

        // Remove existing roles (soft delete or detach)
        DB::table('role_users')
            ->where('user_id', $user->id)
            ->whereNull('deleted_at')
            ->update(['deleted_at' => now(), 'updated_at' => now()]);

        // Assign the new role if provided
        if ($newRoleId) {
            $user->roles()->attach($newRoleId, ['created_at' => now(), 'updated_at' => now()]);
        }

        // Update user status if provided
        if ($newStatus) {
            $user->profile_status = $newStatus;
            $user->save();
        }

        return redirect()->back()->with('success', 'Role and status updated successfully!');
    }
}
