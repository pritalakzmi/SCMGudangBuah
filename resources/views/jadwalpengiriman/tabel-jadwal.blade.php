<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Tanggal Kirim</th>
                <th>jam Kirim</th>
                <th>Resi</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $b)
            <tr>
                <td>{{$b->tgl_kirim}}</td>
                <td>{{$b->jam_kirim}}</td>
                <td>{{$b->resi}}</td>
                <td>
                    <form action="{{ route('jadwal.destroy',$b->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('jadwal.edit',$b->id) }}" class="btn btn-warning"><span
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