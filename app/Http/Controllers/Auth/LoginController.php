<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;


class LoginController extends Controller
{
    
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'national_card_id' => ['required'],
        ]);

        $user = User::where('national_card_id', $request->national_card_id)->first();
        
        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->route('register')->withErrors([
            'national_card_id' => 'The provided credentials do not match our records. Please Register as  a New Patient.',
        ]);
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
