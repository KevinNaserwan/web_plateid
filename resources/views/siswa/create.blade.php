@extends('layout/aplikasi2')
@section('isi')
    <form method="POST" action="/siswa">
        @csrf
        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" class="form-control" name="nomor_plat" id="nomor_plat" value="">
        </div>
        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" value="">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="manufacture_year" class="form-label">Manufacture Year</label>
            <input type="text" class="form-control" name="manufacture_year" id="manufacture_year">
        </div>
        <div class="mb-3">
            <label for="cc" class="form-label">CC</label>
            <input type="text" class="form-control" name="cc" id="cc">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="color">
        </div>
        <div class="mb-3">
            <label for="fuel_type" class="form-label">Fuel Type</label>
            <input type="text" class="form-control" name="fuel_type" id="fuel_type">
        </div>
        <div class="mb-3">
            <label for="regist_year" class="form-label">Regist Year</label>
            <input type="text" class="form-control" name="regist_year" id="regist_year">
        </div>
        <div class="mb-3">
            <label for="date_exp" class="form-label">Date Exp</label>
            <input type="text" class="form-control" name="date_exp" id="date_exp">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
