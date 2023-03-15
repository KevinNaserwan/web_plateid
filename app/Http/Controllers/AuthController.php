<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            //Jika autentikasi sukses
            return 'sukses';
        } else {
            //Jika autentikasi gagal
            return 'gagal';
        }
    }
}
