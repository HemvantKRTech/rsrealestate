<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        // Attempt to authenticate the user
        if (Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            // Authentication passed, redirect to the dashboard
            return redirect()->route('dashboard')->with('status', 'You are logged in!');
        } else {
            // Authentication failed, redirect back with an error message
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        }   
    }
}
