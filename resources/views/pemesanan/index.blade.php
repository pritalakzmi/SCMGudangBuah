@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Pemesanan</h4>
        <p class="card-description">
            Berikut adalah data Pemesanan yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('pemesanan.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Pemesanan</a>
            <a href="{{route('pemesanan.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('pemesanan.tabel-pemesanan')
    </div>

</div>
@endsection