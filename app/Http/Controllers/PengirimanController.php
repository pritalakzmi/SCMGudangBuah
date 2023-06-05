<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;
use App\Models\Truk;
use App\Models\Pemesanan;
use PDF;

class PengirimanController extends Controller
{
    // public function index()
    // {
    //     $pemesanan = Pemesanan::get();
    //     $truk = Truk::get();
    //     $pengiriman = Pengiriman::select(
    //     );

    //     return view('pengiriman.index');
    // }
    public function index(Request $request)
    {
        
        $pemesanan = Pemesanan::get();
        $truk = Truk::get();
        $pengiriman = pengiriman::select(
            'pengiriman.id as id',
            'pengiriman.resi as resi',

            'pengiriman.pemesanan_id as pid',
            'pemesanan.tgl_pemesanan as tglpesan',
            'pemesanan.status_pembayaran as statusbayar',
            'pemesanan.status_pemesanan as statuspesan',

            'pengiriman.truk_id as tid',
            'truk.no_polisi as polis',
            
            'pengiriman.status_pengiriman as status')

        ->leftJoin('pemesanan','pengiriman.pemesanan_id','=','pemesanan.id')
        ->leftJoin('truk','pengiriman.truk_id','=','truk.id')
        ->get();
        $data = [
            'pengiriman' => $pengiriman
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pengiriman.pdf',$data);
            return $pdf->download('pengiriman.pdf');
        }
        return view('pengiriman.index', compact('pengiriman','pemesanan','truk'));
    }

    public function create()
    {
        $pengiriman = Pengiriman::get();
        $pemesanan = Pemesanan::all();
        $truk = Truk::all();
        return view('pengiriman.create', compact('pengiriman','pemesanan','truk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'resi' => 'required',
            'pemesanan_id' => 'required',
            'truk_id' => 'required',
            'status_pengiriman' => 'required',
        ]);

        Pengiriman::create($request->all());

        return redirect()->route('pengiriman.index')->with('success', 'Pengiriman Baru Telah Ditambahkan');
    }



    public function show()
    {
        
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pemesanan = Pemesanan::all();
        $truk = Truk::all();
        return view('pengiriman.edit', compact('pengiriman','pemesanan','truk'));
    }

    public function update(Request $request, Pengiriman $pengiriman)
    {
        $request->validate([
            'resi' => 'required',
            'pemesanan_id' => 'required',
            'truk_id' => 'required',
            'status_pengiriman' => 'required',
        ]);
        
        $pengiriman->update($request->all());
        return redirect()->route('pengiriman.index')->with('success','pengiriman successfully updated.');
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();

        return redirect()->route('pengiriman.index')->with('success', 'pengiriman successfully deleted.');
    }
}