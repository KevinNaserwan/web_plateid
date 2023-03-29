@extends('layout/aplikasi2')
@section('isi')
    <a href="/siswa" class="btn btn-secondary">Kembali</a>
    <form method="POST" action="{{ '/siswa/' . $data->firstname }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="firstname" class="form-label">FirstName</label>
            <input type="text" class="form-control" name="firstname" id="firstname" value="{{ $data->firstname }}">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">LastName</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $data->lastname }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $data->email }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection
