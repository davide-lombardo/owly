<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;


class UserController extends Controller
{

    public function create() 
    {
        return view('users.register');
    }

    public function store(Request $request) 
    {
        $formFields = request()->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:users" ,
            "password" => "required|confirmed|min:6" 
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User created and logged in');
    }

    public function logout(Request $request) 
    {
        auth()->logout(); 

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out');

    }

    public function login() 
    {
        return view('users.login');
    }

    public function authenticate(Request $request) 
    {
        $validated = $request->validate([
            "email" => ["required", "email"],
            "password" => "required" 
        ]);

        if(auth()->attempt($validated)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }


}
