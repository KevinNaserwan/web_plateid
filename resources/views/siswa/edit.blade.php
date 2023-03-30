@extends('layout/aplikasi2')
@section('isi')
    <a href="/siswa" class="btn btn-secondary">Kembali</a>
    <form method="POST" action="{{ '/siswa/' . $data->nomor_plat }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" class="form-control" name="nomor_plat" id="nomor_plat" value="{{ $data->nomor_plat }}">
        </div>
        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik"
                value="{{ $data->nama_pemilik }}">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" value="{{ $data->brand }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $data->type }}">
        </div>
        <div class="mb-3">
            <label for="manufacture_year" class="form-label">Manufacture Year</label>
            <input type="text" class="form-control" name="manufacture_year" id="manufacture_year"
                value="{{ $data->manufacture_year }}">
        </div>
        <div class="mb-3">
            <label for="cc" class="form-label">CC</label>
            <input type="text" class="form-control" name="cc" id="cc" value="{{ $data->cc }}">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="color" value="{{ $data->color }}">
        </div>
        <div class="mb-3">
            <label for="fuel_type" class="form-label">Fuel Type</label>
            <input type="text" class="form-control" name="fuel_type" id="fuel_type" value="{{ $data->fuel_type }}">
        </div>
        <div class="mb-3">
            <label for="regist_year" class="form-label">Regist Year</label>
            <input type="text" class="form-control" name="regist_year" id="regist_year" value="{{ $data->regist_year }}">
        </div>
        <div class="mb-3">
            <label for="date_exp" class="form-label">Date Exp</label>
            <input type="text" class="form-control" name="date_exp" id="date_exp" value="{{ $data->date_exp }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
