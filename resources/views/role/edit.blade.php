@extends('layouts.master')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/role" class="btn btn-primary">Kembali</a>
            <br />
            <br />
            <form method="post" action="{{route('role.update', $role->id)}}" class="forms-sample">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Role.."
                        value=" {{ $role->role}}">
                    @if($errors->has('role'))
                    <div class="text-danger">
                        {{ $errors->first('role')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection