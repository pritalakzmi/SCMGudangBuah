<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $p)
            <tr>
                <td>{{$p->name}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->password}}</td>
                <td>
                    <form action="{{ route('pengguna.destroy',$p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('pengguna.edit',$p->id) }}" class="btn btn-warning"><span
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