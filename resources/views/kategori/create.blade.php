@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Data Kategori</h4>
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="{{ route('kategori.store') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="nama_kategori">Kategori Buah</label>
                      <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori Buah">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                  </form>
                </div>
              </div>
            </div>
@endsection