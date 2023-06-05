@extends('layouts.master')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/kategori" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form method="post" action="{{route('kategori.update', $kategori->id)}}" class="forms-sample">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Kategori Buah</label>
                    <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori Buah.."
                        value=" {{ $kategori->nama_kategori}}">
                    @if($errors->has('nama_kategori'))
                    <div class="text-danger">
                        {{ $errors->first('nama_kategori')}}
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