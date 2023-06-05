<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Resi Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Status Pembayaran</th>
                <th>No Polisi</th>
                <th>Status Pemesanan</th>
                <th>Status Pengiriman</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengiriman as $png)
            <tr>
                <td>{{$png->resi}}</td>
                <td>{{$png->tglpesan}}</td>
                <td>{{$png->statusbayar}}</td>
                <td>{{$png->polis}}</td>
                <td>{{$png->statuspesan}}</td>
                <td>{{$png->status}}</td>
                <td>
                    <form action="{{ route('pengiriman.destroy',$png->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('pengiriman.edit',$png->id) }}" class="btn btn-warning"><span
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