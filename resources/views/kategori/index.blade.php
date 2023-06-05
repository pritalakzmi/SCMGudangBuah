@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Kategori</h4>
        <p class="card-description">
            Berikut adalah data Kategori yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('kategori.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Kategori</a>
            <a href="{{route('kategori.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('kategori.tabel-kategori')
    </div>

</div>
@endsection