<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showAdmin()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please log in to access the admin page.');
        }

        return view('pages.admin');
    }

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
        // Validate inputs
        $request->validate([
            'username' => 'required|string|max:255|unique:users,login_name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        // Save user
        $user = new UserModel();
        $user->user_type_id = 1;
        $user->login_name = $request->username;
        // $user->password = Hash::make($request->password);
        $user->password = $request->password;
        $user->fullname = $request->fullname;
        $user->contact_number = '';
        $user->contact_address = '';
        $user->email = $request->email;
        $user->save();

        return redirect()->route('login')->with('success', 'Registered successfully. Please login !!!');
    }

    public function login(Request $request)
    {
        // Validate inputs
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find user by username
        $user = UserModel::where('login_name', $request->username)->first();

        // Check if user exists and password is correct

        // if ($user && Hash::check($request->password, $user->password)) {

        if ($user && $user->password === $request->password) {

            // Store user info in session
            session([
                'user_id' => $user->user_id,
                'username' => $user->login_name,
                'fullname' => $user->fullname,
                'email' => $user->email,
                'user_type_id' => $user->user_type_id,
            ]);

            return redirect()->route('admin')->with('success', 'Login successfull!');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login')->with('success', 'Logout successfull!');
    }
}
