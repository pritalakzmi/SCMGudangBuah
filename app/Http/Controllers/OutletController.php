<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use PDF;

class OutletController extends Controller
{

    public function index(Request $request)
    {
        $outlet = Outlet::get();
	    $data = [
	            'outlet' => $outlet
	    ];

	    if($request->has('download'))
	    {
	        $pdf = PDF::loadView('outlet.pdf',$data);
	        return $pdf->download('outlet.pdf');
	    }

        return view('outlet.index', compact('outlet'));
    }

    public function create()
    {
        $outlet = Outlet::get();
        return view('outlet.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_outlet' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        // untuk insert data ke database
        Outlet::create($request->all());

        return redirect('/outlet')->with('success', 'Outlet Baru Telah Ditambahkan');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $outlet = Outlet::find($id);
        return view('outlet.edit', compact('outlet'));
    }

    public function update(Request $request, $id)
    {
        $outlet = Outlet::find($id);
        $outlet->nama_outlet = $request->input('nama_outlet');
        $outlet->alamat = $request->input('alamat');
        $outlet->no_telp = $request->input('no_telp');
        $outlet->save();

        return redirect('/outlet')->with('success', 'Outlet Baru Telah Ditambahkan');
    }

    public function destroy($id)
    {
        $outlet = outlet::find($id);
        $outlet->delete();

        return redirect()->route('outlet.index')->with('success', 'outlet successfully deleted.');
    }
}