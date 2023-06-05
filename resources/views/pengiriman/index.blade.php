@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Pengiriman</h4>
        <p class="card-description">
            Berikut adalah data Pengiriman yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
        <a href="{{route('pengiriman.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Pengiriman</a>
            <a href="{{route('pengiriman.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('pengiriman.tabel-Pengiriman')
    </div>

</div>
@endsection