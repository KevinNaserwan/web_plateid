<?php

namespace App\Http\Controllers;

use App\Models\Plate;
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
        $data = Plate::orderby('nama_pemilik', 'desc')->paginate(10);
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
        Session::flash('nomorplat', $request->nomor_plat);
        Session::flash('namapemilik', $request->nama_pemilik);
        Session::flash('brand', $request->brand);
        Session::flash('type', $request->type);
        Session::flash('manufactureyear', $request->manufacture_year);
        Session::flash('cc', $request->cc);
        Session::flash('color', $request->color);
        Session::flash('fueltype', $request->fuel_type);
        Session::flash('registyear', $request->regist_year);
        Session::flash('dateexp', $request->date_exp);

        $data = [
            'nomorplat' => $request->input('nomor_plat'),
            'namapemilik' => $request->input('nama_pemilik'),
            'brand' => $request->input('brand'),
            'type' => $request->input('type'),
            'manufactureyear' => $request->input('manufacture_year'),
            'cc' => $request->input('cc'),
            'color' => $request->input('color'),
            'fueltype' => $request->input('fuel_type'),
            'registyear' => $request->input('regist_year'),
            'dateexp' => $request->input('date_exp')
        ];
        Plate::create($data);
        return redirect('siswa')->with('success', 'Berhasil Memasukkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($namapemilik)
    {
        //
        $data = Plate::where('nama_pemilik', $namapemilik)->first();
        return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($namapemilik)
    {
        $data = Plate::where('nama_pemilik', $namapemilik)->first();
        return view('siswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $namapemilik)
    {
        $data = [
            'nomorplat', $request->input('nomor_plat'),
            'namapemilik' => $request->input('nama_pemilik'),
            'brand' => $request->input('brand'),
            'type' => $request->input('type'),
            'manufactureyear' => $request->input('manufacture_year'),
            'cc' => $request->input('cc'),
            'color' => $request->input('color'),
            'fueltype' => $request->input('fuel_type'),
            'registyear' => $request->input('regist_year'),
            'dateexp' => $request->input('date_exp')
        ];
        Plate::where('nomor_plat', $namapemilik)->update($data);
        return redirect('/siswa')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nomorplat)
    {
        $data = Plate::where('nomor_plat', $nomorplat)->first();
        Plate::where('nomor_plat', $nomorplat)->delete();
        return redirect('/siswa')->with('success', 'Data Berhasil Dihapus');
    }
}
