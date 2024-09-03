<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate user input
        $validatedData = $request->validate([
            'identity' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = [
            'password' => $validatedData['password']
        ];

        if (filter_var($validatedData['identity'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $validatedData['identity'];
        } else {
            $credentials['username'] = $validatedData['identity'];
        }

        if (auth()->attempt($credentials)) {
            // Authentication successful, redirect to the home page
            return redirect()->route('Dashboard')->with('success', 'login berhasil.');
        } else {
            // Authentication failed, redirect back to the login page with an error message
            return redirect()->back()->with('error', 'username dan password tidak cocok');
        }
    }
    public function logout(Request $request)
    {
        // Logout the authenticated user
        Auth::logout();

        // Redirect to the login page after logout
        return redirect()->route('login')->with('success', 'logout berhasil.');
    }
}
