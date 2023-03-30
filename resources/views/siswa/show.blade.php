@extends('layout/aplikasi2')
@section('isi')
    <div>
        <a class="btn btn-danger btn-sm" href="/siswa">Kembali</a>
        <p>
            <b>Nomor Plat</b><br>{{ $data->nomor_plat }}
        </p>
        <p>
            <b>Nama Pemilik</b><br>{{ $data->nama_pemilik }}
        </p>
        <p>
            <b>Brand</b><br>{{ $data->brand }}
        </p>
        <p>
            <b>Type</b><br>{{ $data->type }}
        </p>
        <p>
            <b>Manufacture Year</b><br>{{ $data->manufacture_year }}
        </p>
        <p>
            <b>CC</b><br>{{ $data->cc }}
        </p>
        <p>
            <b>Color</b><br>{{ $data->color }}
        </p>
        <p>
            <b>fuel_type</b><br>{{ $data->fuel_type }}
        </p>
        <p>
            <b>Regist Year</b><br>{{ $data->regist_year }}
        </p>
        <p>
            <b>Date Exp</b><br>{{ $data->date_exp }}
        </p>
    </div>
@endsection
