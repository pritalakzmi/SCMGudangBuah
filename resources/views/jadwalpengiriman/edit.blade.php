@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/jadwal" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form action="{{route('jadwal.update', $jadwal->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                    <label>tanggal kirim:</label>
                    <div class="input-group">
                        <input value="{{$jadwal->tgl_kirim}}" type="date" class="form-control" placeholder="Nama Buah" name="tgl_kirim"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>jam kirim:</label>
                    <div class="input-group">
                        <input  value="{{$jadwal->jam_kirim}}" type="time" class="form-control" placeholder="Harga Per-Box"
                            name="jam_kirim" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Resi :</label>
                    <select class="form-control" id="kategori" name="pengiriman_id">
                        @foreach ($pengiriman as $k)
                        <option value="{{ $k->id }}">{{ $k->resi}}</option>
                        @endforeach
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