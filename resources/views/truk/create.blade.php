@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Truk</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form action="{{route('truk.store')}}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label>No Polisi :</label>
                    <div class="input-group">
                        <input id="nopol" type="text" class="form-control" placeholder="No Polisi" name="no_polisi"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Merk Kendaraan :</label>
                    <div class="input-group">
                        <input id="merk" type="text" class="form-control" placeholder="Merk Kendaraan"
                            name="merk_kendaraan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Supir :</label>
                    <select class="form-control" id="supir" name="user_id">
                        @foreach ($user as $s)
                        <option value="{{ $s->id }}">{{ $s->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection