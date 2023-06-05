@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Supir</h4>
        <p class="card-description">
            Berikut adalah data supir yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('supir.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Supir</a>
            <a href="{{route('supir.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('supir.tabel-supir')
    </div>
</div>
@endsection