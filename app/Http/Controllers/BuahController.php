<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Buah;
use PDF;

class BuahController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all();
        $buah = Buah::leftJoin('kategori','buah.kategori_id','=','kategori.id')->select(
            'buah.id as id',
            'buah.kategori_id as kid', 
            'kategori.nama_kategori as namakategori', 
            'buah.nama_buah as namabuah',
            'buah.harga_per_box as harga',
            'buah.stok_awal as saw',
            'buah.stok_masuk as sm',
            'buah.stok_keluar as sk',
            'buah.stok_akhir as sak')
        ->get();
        $data = [
            'buah' => $buah
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('buah.pdf',$data);
            return $pdf->download('buah.pdf');
        }
        return view('buah.index', compact('buah','kategori'));
    }
    public function create()
    {
        $buah = Buah::get();
        $kategori = Kategori::all();
        return view('buah.create', compact('buah','kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_buah' => 'required',
            'harga_per_box' => 'required',
            'stok_awal' => 'required',
            'stok_masuk' => 'required',
            'stok_keluar' => 'required',
            'stok_akhir' => 'required',
        ]);

        // untuk insert data ke database
        Buah::create($request->all());

        return redirect('/buah')->with('success', 'Buah Baru Telah Ditambahkan');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $buah = Buah::find($id);
        $kategori = Kategori::all();
        return view('buah.edit', compact('buah','kategori'));
    }

    public function update(Request $request, Buah $buah)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_buah' => 'required',
            'harga_per_box' => 'required',
            'stok_awal' => 'required',
            'stok_masuk' => 'required',
            'stok_keluar' => 'required',
            'stok_akhir' => 'required',
        ]);
        $buah->update($request->all());
        return redirect()->route('buah.index')->with('success','buah successfully updated.');
    }

    public function destroy($id)
    {
        $buah = Buah::find($id);
        $buah->delete();

        return redirect()->route('buah.index')->with('success', 'buah successfully deleted.');
    }
}