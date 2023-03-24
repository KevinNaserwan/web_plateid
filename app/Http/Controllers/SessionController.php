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
}
