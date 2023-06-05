@extends('layouts.master')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/pengguna" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form method="post" action="{{route('pengguna.update', $pengguna->id)}}" class="forms-sample">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Nama Pengguna :</label>
                    <input type="text" name="name" class="form-control" placeholder="nama"
                        value=" {{ $pengguna->name}}">
                    @if($errors->has('name'))
                    <div class="text-danger">
                        {{ $errors->first('name')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Email"
                        value=" {{ $pengguna->email}}">
                    @if($errors->has('email'))
                    <div class="text-danger">
                        {{ $errors->first('email')}}
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