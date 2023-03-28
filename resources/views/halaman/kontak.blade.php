@extends('layout/aplikasi')
@section('konten')
    <h1>{{ $judul }}</h1>
    <p>
    <ul>
        <li>Email : {{ $kontak['email'] }}</li>
        <li>Youtube : {{ $kontak['youtube'] }}</li>
    </ul>
    </p>
@endsection
