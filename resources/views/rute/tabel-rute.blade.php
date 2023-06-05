<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Resi</th>
                <th>Status Pengiriman</th>
                <th>Rute Truk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rute as $r)
            <tr>
                <td>{{$r->resi}}</td>
                <td>{{$r->statuskirim}}</td>
                <td>{{$r->rute}}</td>
                <td>
                    <form action="{{ route('rute.destroy',$r->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('rute.edit',$r->id) }}" class="btn btn-warning"><span
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