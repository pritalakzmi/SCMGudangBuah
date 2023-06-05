<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data Supir</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                
                <div class="card-body">
                    <a href="/supir" class="btn-sm btn-info for inverse buttons">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/supir/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="supir" class="form-control" placeholder="Nama">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>SIM</label>
                            <input type="text" name="sim" class="form-control" placeholder="SIM">
 
                            @if($errors->has('sim'))
                                <div class="text-danger">
                                    {{ $errors->first('sim')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No.Telp</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="No.Telp">
 
                            @if($errors->has('no_telp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telp')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-inverse-info for inverse buttons" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>