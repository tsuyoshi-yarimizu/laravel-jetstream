<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    use Authenticatable;

    public function index()
    {
        return view('session.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $password = Arr::get($request->toArray(), 'password');
        $credentials['email'] = Arr::get($request, 'email');
        $credentials['password'] = $password;

        if (Auth::attempt($credentials)) {
            Log::debug('login success');
            $request->session()->regenerate();

            return redirect()->intended('/user');
        }

        Log::debug('login failed.');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
}
