@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Role</h4>
        <p class="card-description">
            Berikut adalah data Role yang terdaftar pada gudang
        </p>
        <div class="btn-wrapper">
            <a href="{{route('role.create')}}" class="btn btn-success btn-rounded btn-fw">Tambah Data Role</a>
            <a href="{{route('role.index',['download'=>'pdf'])}}" class="btn btn-primary btn-rounded btn-fw"><i class="icon-printer"></i> Print</a>
        </div>
    </div>
    <div class="card-body">
        @include('role.tabel-role')
    </div>

</div>
@endsection