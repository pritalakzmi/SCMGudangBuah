@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/buah" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form action="{{route('buah.update', $buah->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label>Kategori Buah :</label>
                <select class="form-control" id="kategori" name="kategori_id">
                    @foreach ($kategori as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Buah :</label>
                    <div class="input-group">
                        <input value="{{$buah->nama_buah}}" id="nama_buah" type="text" class="form-control" placeholder="Nama Buah" name="nama_buah" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga Per-Box :</label>
                    <div class="input-group">
                        <input value="{{$buah->harga_per_box}}" id="harga_per_box" type="text" class="form-control" placeholder="Harga Per-Box" name="harga_per_box" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Awal :</label>
                    <div class="input-group">
                        <input value="{{$buah->stok_awal}}" id="stok_awal" type="text" class="form-control" placeholder="Box" name="stok_awal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Masuk :</label>
                    <div class="input-group">
                        <input value="{{$buah->stok_masuk}}" id="stok_masuk" type="text" class="form-control" placeholder="Box" name="stok_masuk" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Keluar :</label>
                    <div class="input-group">
                        <input value="{{$buah->stok_keluar}}" id="stok_keluar" type="text" class="form-control" placeholder="Box" name="stok_keluar" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Akhir :</label>
                    <div class="input-group">
                        <input value="{{$buah->stok_akhir}}" id="stok_akhir" type="text" class="form-control" placeholder="Box" name="stok_akhir" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection