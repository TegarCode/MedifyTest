@extends('layouts.app')
@section('content')
<div class="container">
    <h3>{{ $method == 'new' ? 'Tambah' : 'Edit' }} Kategori</h3>
    <form method="POST" action="{{ url('kategori/form/'.$method.($method=='edit'?'/'.$kategori->id:'') ) }}">
        @csrf
        <div class="form-group">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" value="{{ $kategori->kode ?? '' }}" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $kategori->nama ?? '' }}" required>
        </div>
        <button class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
