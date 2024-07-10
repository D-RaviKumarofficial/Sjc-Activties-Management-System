<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function processRegister(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed', // Added confirmation rule
        ]);

        // Create the new admin
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();

        return redirect()->route('admin.login')->with('success', 'Registration successful');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Manually authenticate the admin
        $admin = Admin::where('email', $request->input('email'))->first();

        if ($admin && Hash::check($request->input('password'), $admin->password)) {
            // Store admin ID in session
            Session::put('admin_id', $admin->id);
            return redirect()->route('admin.home')->with('success', 'You are logged in successfully');
        } else {
            return redirect()->route('admin.login')->with('error', 'Either email or password is incorrect')->withInput();
        }
    }

    public function home()
    {
        return view('admin.home');
    }
}
