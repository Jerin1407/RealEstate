<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\PriceRangeModel;
use App\Models\PasswordResetModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        return redirect()->back()->with('success', 'Password updated successfully !!!');
    }

    public function listForgotPassword()
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('forgot_password.list', compact('categories', 'priceRanges', 'locations'));
    }

    public function saveForgotPassword(Request $request)
    {
        $email = $request->email;

        // Always show the same response to avoid user enumeration
        $message = "If the email exists, a password reset link has been sent.";

        // Check if email exists in DB
        $user = UserModel::where('email', $email)->first();
        if (!$user) {
            return back()->with('success', $message);
        }

        // Generate token
        $token = Str::random(64);

        // Delete old tokens
        PasswordResetModel::where('email', $email)->delete();

        // Save new token
        PasswordResetModel::create([
            'email' => $email,
            'token' => $token,
            'created_at' => now(),
        ]);

        // Send email
        $resetLink = url("resetpassword?token=$token&email=$email");
        Mail::raw("Click the link to reset your password: $resetLink", function ($mail) use ($email) {
            $mail->to($email)
                ->subject("Reset Password");
        });

        return back()->with('success', $message);
    }

    public function resetPassword(Request $request)
    {
        $categories = CategoryModel::all();
        $priceRanges = PriceRangeModel::all();
        $locations = LocationModel::all();

        return view('forgot_password.reset_password', compact('categories', 'priceRanges', 'locations'), [
            'token' => $request->token,
            'email' => $request->email
        ]);
    }

    public function updateResetPassword(Request $request)
    {
        // Validate input
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $passwordReset = PasswordResetModel::where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$passwordReset) {
            return back()->with('error', 'Invalid or expired token.');
        }

        // Update password
        UserModel::where('email', $request->email)
            //  ->update(['password' => Hash::make($request->password)]);
            ->update(['password' => $request->password]);

        // Delete token
        PasswordResetModel::where('email', $request->email)->delete();

        return redirect()->route('login')->with('success_reset', 'Password reset successfully !!!');
    }
}
