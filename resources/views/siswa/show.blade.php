@extends('layout/aplikasi2')
@section('isi')
    <div>
        <a class="btn btn-danger btn-sm" href="/siswa">Kembali</a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Nomor Induk</b>{{ $data->nomor_induk }}
        </p>
        <p>
            <b>Alamat</b>{{ $data->alamat }}
        </p>
    </div>
@endsection
