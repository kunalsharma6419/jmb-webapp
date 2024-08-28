<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // return view('admin.pages.dashboard');
        return view('admin.pages.dashboard', [
            'users' => User::where('id', '!=', auth()->id())->get()
        ]);
    }
}
