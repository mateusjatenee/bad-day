<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        dd($request);
        Validator::make($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return 1;
        }

    }
}
