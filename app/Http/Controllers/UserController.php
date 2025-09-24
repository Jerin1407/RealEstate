<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function showRegistrationForm()
    {
        return view('pages.register');
    }


    public function register(Request $request)
    {        
        // validate inputs
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        // save user
        $user = new UserModel();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Registered successfully. Please login !!!');
    }

    public function login(Request $request)
    {
        // validate input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // find user by username
        $user = UserModel::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Store user in session
            session(['user_id' => $user->id, 'username' => $user->username]);

            return redirect()->route('admin')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid username or password.');

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login')->with('success', 'Logout successfull!');
    }
}
