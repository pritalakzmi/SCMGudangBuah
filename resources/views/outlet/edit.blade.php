@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/pengiriman" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form action="{{route('outlet.update', $outlet->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                      <label for="nama_outlet">Nama Outlet</label>
                      <input value="{{$outlet->nama_outlet}}" type="text" name="nama_outlet" class="form-control" placeholder="Nama Outlet">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input value="{{$outlet->alamat}}" type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Nomor Telepon</label>
                      <input value="{{$outlet->no_telp}}" type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                    </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection