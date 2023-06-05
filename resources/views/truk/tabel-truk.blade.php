<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nomor Polisi</th>
                <th>Merk Kendaraan</th>
                <th>Nama Supir</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($truk as $t)
            <tr>
                <td>{{$t->nopol}}</td>
                <td>{{$t->merk}}</td>
                <td>{{$t->name}}</td>
                <td>
                    <form action="{{ route('truk.destroy',$t->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('truk.edit',$t->id) }}" class="btn btn-warning"><span
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