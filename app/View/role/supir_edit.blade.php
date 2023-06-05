<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <a href="/supir" class="btn btn-inverse-info for inverse buttons">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/supir/update/{{ $supir->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Supir</label>supir
                            <input type="text" name="supir" class="form-control" placeholder="Supir.." value=" {{ $supir->supir }}">
 
                            @if($errors->has('supir'))
                                <div class="text-danger">
                                    {{ $errors->first('supir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nama</label>nama
                            <input type="text" name="nama_buah" class="form-control" placeholder="Nama Buah .." value=" {{ $supir->nama }}">
 
                            @if($errors->has('nama_buah'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_buah')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>SIM</label>sim
                            <input type="text" name="sim" class="form-control" placeholder="SIM.." value=" {{ $supir->sim }}">
 
                            @if($errors->has('sim'))
                                <div class="text-danger">
                                    {{ $errors->first('sim')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No.Telp</label>no_telp
                            <input type="text" name="no_telp" class="form-control" placeholder="No.Telp .." value=" {{ $supir->no_telp }}">
 
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