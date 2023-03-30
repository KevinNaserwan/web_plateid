@extends('layout/aplikasi2')
@section('isi')
    <table class="table">
        <thead>
            <tr>
                <th>Nomor Plat</th>
                <th>Manufacture year</th>
                <th>Color</th>
                <th>Date Expired</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nomor_plat }}</td>
                    <td>{{ $item->manufacture_year }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->date_exp }}</td>
                    <td><a class="btn btn-secondary btn-sm" href="{{ url('/siswa/' . $item->nama_pemilik) }}">Detail</a>
                        <form onsubmit="return confirm('Yakin mau hapus data?')" class="d-inline"
                            action="{{ '/siswa/' . $item->nomor_plat }}" method="POST">
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
