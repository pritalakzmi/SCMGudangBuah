@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Pengiriman</h4>
            <p class="card-description">
            </p>
            <form action="{{ route('pengiriman.store') }}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label>Resi :</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Resi" name="resi" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pemesanan:</label>
                    <select class="form-control" name="pemesanan_id" required>
                        @foreach ($pemesanan as $p)
                        <option value="{{ $p->id }}">{{ $p->tgl_pemesanan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>No Polisi Truk:</label>
                    <select class="form-control" name="truk_id">
                        @foreach ($truk as $t)
                        <option value="{{ $t->id }}">{{ $t->no_polisi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Status Pengiriman:</label>
                    <select class="form-control" name="status_pengiriman">
                        <option value="Gagal">Gagal</option>
                        <option value="Berhasil">Berhasil</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection