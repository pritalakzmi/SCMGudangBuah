@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/buah" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form action="{{route('supir.update', $supir->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Nama Supir :</label>
                    <select class="form-control" id="user" name="user_id">
                        @foreach ($user as $u)
                        <option value="{{ $u->id }}">{{ $u->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>SIM :</label>
                    <div class="input-group">
                        <input value="{{$supir->sim}}" type="text" class="form-control" placeholder="SIM" name="sim" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>No Telepon :</label>
                    <div class="input-group">
                        <input value="{{$supir->no_telp}}" type="text" class="form-control" placeholder="No Telepon " name="no_telp" required>
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