<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print_Data_Pemesanan</title>
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
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Outlet</th>
                    <th scope="col">Buah</th>
                    <th scope="col">Jumlah Pesanan</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Status Pemesanan</th>
                    <th scope="col">Tanggal Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemesanan as $pm)
                    <tr>
                        <td>{{ $pm->namaoutlet }}</td>
                        <td>{{ $pm->namabuah }}</td>
                        <td>{{ $pm->jumlahpesanan }}</td>
                        <td>{{ $pm->total }}</td>
                        <td>{{ $pm->statusbayar }}</td>
                        <td>{{ $pm->statuspesan }}</td>
                        <td>{{ $pm->stanggalak }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
