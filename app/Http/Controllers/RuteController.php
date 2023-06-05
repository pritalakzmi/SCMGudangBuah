<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
use App\Models\Pengiriman;
use PDF;

class RuteController extends Controller
{
    public function index(Request $request)
    {
    
        $pengiriman = Pengiriman::get();
        $rute = Rute::select(
            'rute.id as id',
            'rute.truk_rute as rute',

            'rute.pengiriman_id as pid',
            'pengiriman.resi as resi',
            'pengiriman.status_pengiriman as statuskirim')

        ->leftJoin('pengiriman','rute.pengiriman_id','=','pengiriman.id')
        ->get();
        $data = [
            'rute' => $rute
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('rute.pdf',$data);
            return $pdf->download('rute.pdf');
        }
        return view('rute.index', compact('pengiriman','rute'));
    }

    public function create()
    {
        $pengiriman = Pengiriman::get();
        $rute = Rute::all();
        return view('rute.create', compact('pengiriman','rute'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'truk_rute' => 'required',
            'pengiriman_id' => 'required',

        ]);

        Rute::create($request->all());

        return redirect()->route('rute.index')->with('success', 'Pengiriman Baru Telah Ditambahkan');
    }

    public function show(){}
    
    public function edit($id)
    {
        $rute = Rute::find($id);
        $pengiriman = Pengiriman::get();
        return view('rute.edit', compact('pengiriman','rute'));
    }

    public function update(Request $request, Rute $rute)
    {
        $request->validate([
            'truk_rute' => 'required',
            'pengiriman_id' => 'required',

        ]);
        
        $rute->update($request->all());
        return redirect()->route('rute.index')->with('success','rute successfully updated.');
    }

    public function destroy($id)
    {
        $rute = Rute::find($id);
        $rute->delete();

        return redirect()->route('rute.index')->with('success', 'Rute successfully deleted.');
    }
}

