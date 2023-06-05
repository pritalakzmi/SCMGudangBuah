@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Data Outlet</h4>
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="{{ route('outlet.store') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="nama_outlet">Nama Outlet</label>
                      <input type="text" name="nama_outlet" class="form-control" placeholder="Nama Outlet">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Nomor Telepon</label>
                      <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                  </form>
                </div>
              </div>
            </div>
@endsection