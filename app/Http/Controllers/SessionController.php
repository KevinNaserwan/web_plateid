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

    function berandain()
    {
        return view('Page/berandain');
    }

    function admin()
    {
        return view('CRUD/admin');
    }

    function user()
    {
        return view('CRUD/users');
    }

    function index()
    {
        return view("sesi/index");
    }


    function login1(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'password wajib diisi'
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)) {
            return redirect('siswa')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }

    function register1()
    {
        return view('sesi/register');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ],
            [
                'name.required' => 'Nama Wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Silakan Masukkan email yang valid',
                'email.unique' => 'Email sudah pernah digunakan, silakan pilih email yang lain',
                'password.required' => 'password wajib diisi',
                'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
            ]
        );
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($infologin)) {
            return redirect('siswa')->with('success', Auth::user()->name . 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
    }
}
