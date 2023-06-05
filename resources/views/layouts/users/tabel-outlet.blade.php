<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama Outlet</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($outlet as $o)
            <tr>
                <td>{{$o->nama_outlet}}</td>
                <td>{{$o->alamat}}</td>
                <td>{{$o->no_telp}}</td>
                <td>
                    <form action="{{ route('outlet.destroy',$o->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('outlet.edit',$o->id) }}" class="btn btn-warning"><span
                                    class="fa fa-edit">Edit</span>
                            </a>
                        </span>
                        <span data-toggle="tooltip" data-placement="bottom" title="Delete Data">
                            <button type="submit" class="btn btn-danger">
                                <span class="fa fa-trash-alt">Hapus</span>
                            </button>
                        </span>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>