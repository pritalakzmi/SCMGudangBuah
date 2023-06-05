@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data Role</h4>
            <p class="card-description">
                <!-- Basic form layout -->
            </p>
            <form class="forms-sample" action="{{ route('role.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Role:</label>
                    <select class="form-control" name="role">
                        <option value="Admin">Admin</option>
                        <option value="Pegawai">Pegawai</option>
                        <option value="Supir">Supir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection