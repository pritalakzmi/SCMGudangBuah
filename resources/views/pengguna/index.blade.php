@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Pengguna</h4>
        <p class="card-description">
            Berikut adalah data Pengguna yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('pengguna.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('pengguna.tabel-pengguna')
    </div>

</div>
@endsection