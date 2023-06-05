@extends('layouts.master')

@section('content')

            <div class="card mt-5">
                <div class="card-body">
                    <a href="/role/tambah" class="btn-sm btn-info">Tambah Data</a>
                    <a href="/role/report" class="btn-sm btn-success">Cetak Data</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id Role</th>
                                <th>Role</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($role as $k)
                            <tr>
                                <td>{{ $k->id_role }}</td>
                                <td>{{ $k->role }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>
                                    <a href="/role/edit/{{ $k->id }}" class="btn-sm btn-warning">Edit</a>
                                    <a href="/role/delete/{{ $k->id }}" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection