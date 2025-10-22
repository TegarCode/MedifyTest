@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Kategori: {{ $kategori->nama }} ({{ $kategori->kode }})</h3>

    <h5>Items dalam kategori ini:</h5>
    <ul>
        @foreach($kategori->items as $item)
            <li>{{ $item->nama }} ({{ $item->kode }})</li>
        @endforeach
    </ul>

    <a href="{{ url('kategori') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
