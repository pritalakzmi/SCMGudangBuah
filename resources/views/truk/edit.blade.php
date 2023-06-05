@extends('layouts.master')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/truk" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form action="{{route('truk.update', $truk->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>No Polisi :</label>
                    <div class="input-group">
                        <input value="{{$truk->no_polisi}}"type="text" class="form-control" placeholder="No Polisi" name="no_polisi"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Merk Kendaraan :</label>
                    <div class="input-group">
                        <input value="{{$truk->merk_kendaraan}}" type="text" class="form-control" placeholder="Merk Kendaraan"
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
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection