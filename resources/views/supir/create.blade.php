@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data truk</h4>
            <p class="card-description">
            </p>
            <form class="forms-sample" action="{{ route('supir.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Supir :</label>
                    <select class="form-control" name="user_id">
                        @foreach ($user as $u)
                        <option value="{{ $u->id }}">{{ $u->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>SIM :</label>
                    <div class="input-group">
                        <input id="sim" type="text" class="form-control" placeholder="SIM" name="sim" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>No Telepon :</label>
                    <div class="input-group">
                        <input id="no" type="text" class="form-control" placeholder="No Telepon " name="no_telp" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection