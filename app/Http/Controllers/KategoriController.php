<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use PDF;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::get();
	    $data = [
	            'kategori' => $kategori
	    ];

	    if($request->has('download'))
	    {
	        $pdf = PDF::loadView('kategori.pdf',$data);
	        return $pdf->download('kategori.pdf');
	    }

        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        $kategori = Kategori::get();
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        // untuk insert data ke database
        Kategori::create($request->all());

        return redirect('/kategori')->with('success', 'Ka Baru Telah Ditambahkan');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->save();

        return redirect('/kategori')->with('success', 'Kategori Baru Telah Ditambahkan');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'kategori successfully deleted.');
    }
}
