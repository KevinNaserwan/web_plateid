<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;

class AuthController extends Controller
{


    public function create()
    {
        return view('Page/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',

        ], [
            'firstname.required' => 'Nama wajib diisi',
            'lastname.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $user = User::where('email', $request->email)->first();
        session(
            ['user_name' => $user->firstname],
        );

        $user = User::where('email', $request->email)->first();
        session(
            ['last_name' => $user->lastname],
        );

        $user = User::where('email', $request->email)->first();
        session(
            ['data_email' => $user->email],
        );

        if (Auth::attempt($infologin)) {
            return redirect('/main');
        } else {
            return redirect('/login')->withErrors('Email atau password yang anda masukkan tidak valid');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $data = User::where('email', $request->email)->first();
        return view('siswa/edit')->with('data', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);
        $data = [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email')
        ];

        User::where('email', $request->email)->update($data);
        return redirect('/users')->with('success', 'Berhasil Melakukan Update Data');
    }
}
