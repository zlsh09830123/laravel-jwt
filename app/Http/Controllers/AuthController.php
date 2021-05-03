<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Incorrect email/password'], 401);
        }

        return redirect('/home')->withCookie(cookie('token', $token, config('jwt.ttl')));
    }
}
