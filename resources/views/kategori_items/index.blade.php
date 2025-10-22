@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Kategori Items</h3>
    <a href="{{ url('kategori/form/new') }}" class="btn btn-primary mb-2">Tambah Kategori</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $k)
            <tr>
                <td>{{ $k->kode }}</td>
                <td>{{ $k->nama }}</td>
                <td>
                    <a href="{{ url('kategori/view/'.$k->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ url('kategori/form/edit/'.$k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ url('kategori/delete/'.$k->id) }}" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
