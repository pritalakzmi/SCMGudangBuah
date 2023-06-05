<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $k)
            <tr>
                <td>{{$k->nama_kategori}}</td>
                <td>
                <form action="{{ route('kategori.destroy',$k->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                        <a href="{{ route('kategori.edit',$k->id) }}" class="btn btn-warning"><span
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