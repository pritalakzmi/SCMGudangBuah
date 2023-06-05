@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Outlet</h4>
        <p class="card-description">
            Berikut adalah data outlet yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('outlet.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Outlet</a>
            <a href="{{route('outlet.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('outlet.tabel-outlet')
    </div>
</div>
@endsection