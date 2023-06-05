@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Buah</h4>
        <p class="card-description">
            Berikut adalah Jadwal yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('jadwal.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Jadwal </a>
            <a href="{{route('jadwal.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('jadwalpengiriman.tabel-jadwal')
    </div>

</div>
@endsection