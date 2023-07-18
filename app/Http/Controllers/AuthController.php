<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::query()->where('email', '=', $request->email)->first();

        if (empty($user)) {
            return redirect()->back()->with('error', "Oops! User data not found");
        }

        $credentials = $request->only('email', 'password');
        $remember = false;
        if (isset($request->remember) && $request->remember === 'on') {
            $remember = true;
        }
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->back()->with('error', "Oops! You have entered invalid credentials");
        }
    }

    public function logout(): object
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }
}
