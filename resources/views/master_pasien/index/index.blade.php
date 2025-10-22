@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group mb-2">
                <a href="{{ url('master-pasien/form/new') }}" class="btn btn-secondary">+ Pasien Baru</a>
            </div>
            <div class="card">
                <div class="card-header">Daftar Master Pasien</div>

                <div class="card-body">
                    @include('master_pasien.index.filter')
                    @include('master_pasien.index.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@include('master_pasien.index.js')
@endsection
