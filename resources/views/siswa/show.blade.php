@extends('layout/aplikasi2')
@section('isi')
    <div>
        <a class="btn btn-danger btn-sm" href="/siswa">Kembali</a>
        <p>
            <b>FirstName</b><br>{{ $data->firstname }}
        </p>
        <p>
            <b>Lastname</b><br>{{ $data->lastname }}
        </p>
        <p>
            <b>Email</b><br>{{ $data->email }}
        </p>
    </div>
@endsection
