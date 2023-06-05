@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Buah</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form action="{{route('buah.store')}}" method="POST" class="forms-sample">
                @csrf
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
                        <input id="nama_buah" type="text" class="form-control" placeholder="Nama Buah" name="nama_buah"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga Per-Box :</label>
                    <div class="input-group">
                        <input id="harga_per_box" type="text" class="form-control" placeholder="Harga Per-Box"
                            name="harga_per_box" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Awal :</label>
                    <div class="input-group">
                        <input id="stok_awal" type="text" class="form-control" placeholder="Box" name="stok_awal"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Masuk :</label>
                    <div class="input-group">
                        <input id="stok_masuk" type="text" class="form-control" placeholder="Box" name="stok_masuk"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Keluar :</label>
                    <div class="input-group">
                        <input id="stok_keluar" type="text" class="form-control" placeholder="Box" name="stok_keluar"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok Akhir :</label>
                    <div class="input-group">
                        <input id="stok_akhir" type="text" class="form-control" placeholder="Box" name="stok_akhir"
                            required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection