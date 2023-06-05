@extends('layouts.master')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/outlet" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form method="post" action="{{route('outlet.update', $outlet->id)}}" class="forms-sample">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                
                <div class="form-group">
                    <label>Nama Outlet</label>
                    <input type="text" name="nama_outlet" class="form-control" placeholder="Nama Outlet .."
                        value=" {{ $outlet->nama_outlet }}">
                    @if($errors->has('nama_outlet'))
                    <div class="text-danger">
                        {{ $errors->first('nama_outlet')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat."
                        value=" {{ $outlet->alamat }}">
                    @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon."
                        value=" {{ $outlet->no_telp }}">
                    @if($errors->has('no_telp'))
                    <div class="text-danger">
                        {{ $errors->first('no_telp')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection