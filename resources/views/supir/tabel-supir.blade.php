<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>SIM</th>
                <th>No Telepon</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supir as $s)
            <tr>
                <td>{{$s->nama}}</td>
                <td>{{$s->sim}}</td>
                <td>{{$s->no}}</td>
                <td>
                    <form action="{{ route('supir.destroy',$s->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('supir.edit',$s->id) }}" class="btn btn-warning"><span
                                    class="fa fa-edit">Edit</span>
                            </a>
                        </span>
                        <span data-toggle="tooltip" data-placement="bottom" title="Delete Data">
                            <button type="submit" class="btn btn-danger">
                                <span class="fa fa-trash-alt">Hapus</span>
                            </button>
                        </span>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>