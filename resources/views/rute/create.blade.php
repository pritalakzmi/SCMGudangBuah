@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Rute</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form action="{{route('rute.store')}}" method="POST" class="forms-sample">
                @csrf

                <div class="form-group">
                    <label>Rute Truk :</label>
                    <div class="input-group">
                        <textarea class="form-control" name="truk_rute" required></textarea>
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