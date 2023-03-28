<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use Database\Seeders\SiswaSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::orderby('firstname', 'desc')->paginate(5);
        return view('siswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('firstname', $request->firstname);
        Session::flash('lastname', $request->lastname);
        Session::flash('email', $request->email);

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ], [
            'firstname.required' => 'Nama depan wajib diisi',
            'lastname.required' => 'Nama belakang wajib diisi',
            'email.required' => 'Email wajib diisi'

        ]);
        $data = [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email')
        ];
        User::create($data);
        return redirect('siswa')->with('success', 'Berhasil Memasukkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        //
        $data = User::where('firstname', $email)->first();
        return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
        $data = User::where('firstname', $email)->first();
        return view('siswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ], [
            'firstname.required' => 'Nama depan wajib diisi',
            'lastname.required' => 'Nama belakang wajib diisi'
        ]);
        $data = [
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
        ];
        User::where('firstname', $email)->update($data);
        return redirect('/siswa')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        $data = User::where('firstname', $email)->first();
        File::delete(public_path('foto') . '/' . $data->foto);
        User::where('firstname', $email)->delete();
        return redirect('/siswa')->with('success', 'Data Berhasil Dihapus');
    }
}
