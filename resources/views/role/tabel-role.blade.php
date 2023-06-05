<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Role</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($role as $ro)
            <tr>
                <td>{{$ro->role}}</td>
                <td>
                    <form action="{{ route('role.destroy',$ro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            <a href="{{ route('role.edit',$ro->id) }}" class="btn btn-warning"><span
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