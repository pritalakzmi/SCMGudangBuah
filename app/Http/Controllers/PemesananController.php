<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Buah;
use App\Models\Outlet;
use PDF;

class PemesananController extends Controller
{
    public function index(Request $request)
    {
        $outlet = Outlet::all();
        $buah = Buah::all();
        // $pemesanan = Pemesanan::leftjoin('outlet','pemesanan.outlet_id','=','outlet.id')->select(
        $pemesanan = Pemesanan::select(
            'pemesanan.id as id',

            'pemesanan.outlet_id as oid',
            'outlet.nama_outlet as namaoutlet',

            'pemesanan.buah_id as bid',
            'buah.nama_buah as namabuah',

            'pemesanan.jml_pesanan as jumlahpesanan',
            'pemesanan.total_harga as total',
            'pemesanan.status_pembayaran as statusbayar',
            'pemesanan.status_pemesanan as statuspesan',
            'pemesanan.tgl_pemesanan as tanggal'
        )
        ->leftJoin('outlet','outlet.id','=','pemesanan.outlet_id')
        ->leftJoin('buah','buah.id','=','pemesanan.buah_id')
        ->get();
        $data = [
            'pemesanan' => $pemesanan
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pemesanan.pdf',$data);
            return $pdf->download('pemesanan.pdf');
        }
        return view('pemesanan.index', compact('pemesanan','outlet','buah'));
    }

    public function create()
    {
        $outlet = Outlet::all();
        $buah = Buah::all();
        return view('pemesanan.create', compact('outlet','buah'));
    }

   public function store(Request $request)
{
    $request->validate([
        'outlet_id' => 'required',
        'buah_id' => 'required',
        'jml_pesanan' => 'required',
        'total_harga' => 'required',
        'status_pembayaran' => 'required',
        'status_pemesanan' => 'required',
        'tgl_pemesanan' => 'required',
    ]);
    

    // untuk insert data ke database
    Pemesanan::create($request->all());

    return redirect()->route('pemesanan.index')->with('success', 'Pemesanan Baru Telah Ditambahkan');
}


    public function show()
    {
        
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        $outlet = Outlet::all();
        $buah = Buah::all();
        return view('pemesanan.edit', compact('pemesanan','outlet','buah'));
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        $request->validate([
            'outlet_id' => 'required',
            'buah_id' => 'required',
            'jml_pesanan' => 'required',
            'total_harga' => 'required',
            'status_pembayaran' => 'required',
            'status_pemesanan' => 'required',
            'tgl_pemesanan' => 'required',
        ]);     

        $pemesanan->update($request->all());
        return redirect()->route('pemesanan.index')->with('success','pemesanan successfully updated.');
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('success', 'pemesanan successfully deleted.');
    }
}