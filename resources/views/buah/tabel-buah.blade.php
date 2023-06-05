<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Nama Buah</th>
                <th>Harga per-Box</th>
                <th>Stok Awal</th>
                <th>Stok Masuk</th>
                <th>Stok Keluar</th>
                <th>Stok Akhir</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buah as $b)
            <tr>
                <td>{{$b->namakategori}}</td>
                <td>{{$b->namabuah}}</td>
                <td>{{$b->harga}}</td>
                <td>{{$b->saw}}</td>
                <td>{{$b->sm}}</td>
                <td>{{$b->sk}}</td>
                <td>{{$b->sak}}</td>
                <td>
                    <form action="{{ route('buah.destroy',$b->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('buah.edit',$b->id) }}" class="btn btn-warning"><span
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