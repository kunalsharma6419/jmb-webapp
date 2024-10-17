<?php

namespace App\Http\Controllers;

use App\Models\SidebarItem;
use Illuminate\Support\Facades\Auth;

class SidebarController
{
    public function index()
    {
        // Check if the authenticated user is a superadmin
        $user = Auth::user();

        if ($user->is_superadmin) {
            // Fetch all sidebar items if the user is a superadmin
            $sidebarItems = SidebarItem::all();
        } else {
            // Fetch sidebar items based on user permissions (if not superadmin)
            $sidebarItems = SidebarItem::with('permission')->get();
        }

        // Return the sidebar items to be accessed in the Blade file
        return $sidebarItems;
    }
}
