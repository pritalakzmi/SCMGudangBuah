@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Rute</h4>
        <p class="card-description">
            Berikut adalah data Rute yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('rute.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Rute</a>
            <a href="{{route('rute.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('rute.tabel-rute')
    </div>

</div>
@endsection