<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{

    function register()
    {
        return view('Page/register');
    }

    function login()
    {
        return view('Page/login');
    }

    function beranda()
    {
        return view('Page/beranda');
    }

    function create(Request $request)
    {
        Session::flash('firstname', $request->firstname);
        $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ],
            [
                'firstname.required' => 'Nama Wajib diisi',
                'lastname.required' => 'Nama Wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Silakan Masukkan email yang valid',
                'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
                'password.required' => 'password wajib diisi',
                'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
            ]
        );
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)) {
            return redirect('siswa')->with('success', Auth::user()->firstname . 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
    }
}
