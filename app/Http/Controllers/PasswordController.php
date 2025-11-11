<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('change_password.list');
    }

    public function updatePassword(Request $request)
    {
        // Validate input fields
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        // Get logged-in user ID from session
        $userId = session('user_id'); // ensure it's set during login

        // Fetch user record
        $user = UserModel::find($userId);

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        // Compare current password directly (plain text)
        if ($request->current_password !== $user->password) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Update new password directly (plain text)
        $user->password = $request->new_password;
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
