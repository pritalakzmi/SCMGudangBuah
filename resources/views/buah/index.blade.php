@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Buah</h4>
        <p class="card-description">
            Berikut adalah data buah yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('buah.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Kategori</a>
            <a href="{{route('buah.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('buah.tabel-buah')
    </div>

</div>
@endsection