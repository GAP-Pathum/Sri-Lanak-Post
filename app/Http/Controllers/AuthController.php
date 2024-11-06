<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class AuthController extends Controller
{
    // Show the home page for authenticated users
    public function home()
    {
        return $this->checkAuthAndRedirect('home');
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register'); // Show the registration view
    }

    // Handle user registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.'); // Redirect to login
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // Show the login view
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user exists
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'User not found. Please register.',
            ])->withInput(); // Redirect back with error message
        }

        // Attempt to login
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home'); // Redirect to home if login is successful
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput(); // Redirect back with error message
        }
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Redirect to login after logout
    }

    // Centralized authentication check method
    protected function checkAuthAndRedirect($view)
    {
        if (Auth::check()) {
            return view($view); // Show the specified view if authenticated
        } else {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }
    }
}
