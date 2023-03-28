<?php

namespace App\Http\Controllers;


use App\Models\User;
use Database\Seeders\SiswaSeeder;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    //
    function index()
    {
        // $data = siswa::all();
        $data = User::orderby('nomor_induk', 'desc')->paginate(1);
        return view('siswa/index')->with('data', $data);
    }

    function detail($id)
    {
        $data = User::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data', $data);
    }

    function create()
    {
    }

    function delete()
    {
    }
}
