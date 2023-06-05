<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Outlet</th>
                <th>Buah</th>
                <th>Jumlah Pesanan</th>
                <th>Total Harga</th>
                <th>Status Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Tanggal Pemesanan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanan as $pm)
            <tr>
                <td>{{$pm->namaoutlet}}</td>
                <td>{{$pm->namabuah}}</td>
                <td>{{$pm->jumlahpesanan}}</td>
                <td>{{$pm->total}}</td>
                <td>{{$pm->statusbayar}}</td>
                <td>{{$pm->statuspesan}}</td>
                <td>{{$pm->tanggal}}</td>
                <td>
                <form action="{{ route('pemesanan.destroy',$pm->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('pemesanan.edit',$pm->id) }}" class="btn btn-warning"><span
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