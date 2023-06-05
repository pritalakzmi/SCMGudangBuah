@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Truk</h4>
        <p class="card-description">
            Berikut adalah data Truk yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
        <a href="{{route('truk.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data truk</a>
            <a href="{{route('truk.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('truk.tabel-truk')
    </div>

</div>
@endsection