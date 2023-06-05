@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Rute</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form action="{{route('rute.update',$rute->id)}}" method="POST" class="forms-sample">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Rute Truk :</label>
                    <div class="input-group">
                        <textarea class="form-control" name="truk_rute" required>{{$rute->truk_rute}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label>Resi :</label>
                    <select class="form-control" name="pengiriman_id">
                        @foreach ($pengiriman as $k)
                        <option value="{{ $k->id }}">{{ $k->resi}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection