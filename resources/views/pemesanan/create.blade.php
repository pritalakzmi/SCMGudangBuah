@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Pemesanan</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form action="{{ route('pemesanan.store') }}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label>Outlet :</label>
                    <select class="form-control" id="outlet" name="outlet_id">
                        @foreach ($outlet as $o)
                        <option value="{{ $o->id }}">{{ $o->nama_outlet}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Buah :</label>
                    <select class="form-control" id="buah" name="buah_id">
                        @foreach ($buah as $b)
                        <option value="{{ $b->id }}">{{ $b->nama_buah}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Pesanan :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Jumlah Pesanan"
                            name="jml_pesanan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Total Harga :</label>
                    <div class="input-group">
                        <input id="total" type="text" class="form-control" placeholder="Harga Per-Box" name="total_harga"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Status Pembayaran:</label>
                    <select class="form-control" name="status_pembayaran">
                        <option value="Berhasil Dibayar">Berhasil Dibayar</option>
                        <option value="Belum Dibayar">Belum Dibayar</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Status Pemesanan:</label>
                    <select class="form-control" name="status_pemesanan">
                        <option value="Berhasil">Berhasil</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                        <option value="Ditunda">Ditunda</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pemesanan :</label>
                    <div class="input-group">
                        <input id="tanggal" type="date" class="form-control" placeholder="Box" name="tgl_pemesanan" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection