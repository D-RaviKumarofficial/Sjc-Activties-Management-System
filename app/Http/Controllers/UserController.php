<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'department' => 'required|string|max:255',
            'shift' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.register')->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated(); // Get validated data

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->department = $validatedData['department'];
        $user->shift = $validatedData['shift'];
        $user->save();

        return redirect()->route('user.login')->with('success', 'Registration successful');
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.login')->withInput()->withErrors($validator);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.home')->with('success', 'You are logged in successfully');
        } else {
            return redirect()->route('user.login')->with('error', 'Either email or password is incorrect');
        }
    }
    public function home()
    {
        return view('user.home');
    }

    public function aboutus(){
        return view('user.Aboutus');
    }
}
