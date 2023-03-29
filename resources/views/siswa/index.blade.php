@extends('layout/aplikasi2')
@section('isi')
    <a href="/siswa/create" class="btn btn-primary">
        + Tambah Data Siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->firstname }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->email }}</td>
                    <td><a class="btn btn-secondary btn-sm" href="{{ url('/siswa/' . $item->firstname) }}">Detail</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/siswa/' . $item->firstname . '/edit') }}">Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data?')" class="d-inline"
                            action="{{ '/siswa/' . $item->firstname }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
