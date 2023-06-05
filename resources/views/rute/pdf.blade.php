<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print_Kategori</title>
    <style>
    @page {
        margin: 2cm;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
        line-height: 1.4;
    }

    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    thead th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #e9e9e9;
    }
    </style>
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Resi</th>
                <th>Status Pengiriman</th>
                <th>Rute Truk</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($rute as $r)
            <tr>
                <td>{{$r->resi}}</td>
                <td>{{$r->statuskirim}}</td>
                <td>{{$r->rute}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>