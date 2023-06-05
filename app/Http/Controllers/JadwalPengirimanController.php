<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPengiriman;
use App\Models\Pengiriman;

use PDF;

class JadwalPengirimanController extends Controller
{
    public function index(Request $request)
    {   

        $pengiriman = Pengiriman::get();
        $jadwal = JadwalPengiriman::select(
            'jadwal.id as id',
            
            'jadwal.pengiriman_id as pid',
            'pengiriman.resi as resi',
            
            'jadwal.tgl_kirim as tgl_kirim',
            'jadwal.jam_kirim as jam_kirim',
        )
        ->leftJoin('pengiriman','jadwal.pengiriman_id', '=', 'jadwal.id')
        ->get();
	    $data = [
	            'jadwal' => $jadwal
	    ];

	    if($request->has('download'))
	    {
	        $pdf = PDF::loadView('jadwalpengiriman.pdf',$data);
	        return $pdf->download('jadwal.pdf');
	    }

        return view('jadwalpengiriman.index', compact('jadwal','pengiriman'));
    }

    public function create()
    {
        $jadwal = JadwalPengiriman::get();
        $pengiriman = pengiriman::get();
        return view('jadwalpengiriman.create',compact('jadwal','pengiriman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_kirim' => 'required',
            'jam_kirim' => 'required',
            'pengiriman_id' => 'required',
        ]);

        // untuk insert data ke database
        JadwalPengiriman::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'jadwal Baru Telah Ditambahkan');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $jadwal = JadwalPengiriman::find($id);
        $pengiriman = pengiriman::get();
        return view('jadwalpengiriman.edit',compact('jadwal','pengiriman'));
    }

    public function update(Request $request, JadwalPengiriman $jadwal)
    {
        $request->validate([
            'tgl_kirim' => 'required',
            'jam_kirim' => 'required',
            'pengiriman_id' => 'required',
        ]);
        $jadwal->update($request->all());
        return redirect()->route('jadwal.index')->with('success','jadwal pengiriman successfully updated.');
    }

    public function destroy($id)
    {
        $jadwal = JadwalPengiriman::find($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'jadwal pengirimans successfully deleted.');
    }
}
