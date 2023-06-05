<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truk;
use App\Models\User;
use PDF;

class TrukController extends Controller
{
    public function index(Request $request)
    {
        $user = User::get();
        $truk = truk::select(
            'truk.id as id',
            'truk.no_polisi as nopol',
            'truk.merk_kendaraan as merk',
            'truk.user_id as uid',
            'users.name as name',

        )
        ->leftJoin('users','truk.user_id','=','users.id')
        ->get();
        $data = [
            'truk' => $truk
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('truk.pdf',$data);
            return $pdf->download('truk.pdf');
        }
        return view('truk.index', compact('truk','user'));
    }
    public function create()
    {
        $user = User::get();
        $truk = Truk::get();
        return view('truk.create', compact('user','truk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_polisi' => 'required',
            'merk_kendaraan' => 'required',
            'user_id' => 'required',
        ]);

        // untuk insert data ke database
        Truk::create($request->all());

        return redirect()->route('truk.index')
            ->with('success', 'Riwayat pembelian berhasil ditambahkan.');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $truk = Truk::find($id);
        $user = User::get();
        return view('truk.edit', compact('truk','user'));
    }

    public function update(Request $request, Truk $truk)
    {
        $request->validate([
            'no_polisi' => 'required',
            'merk_kendaraan' => 'required',
            'user_id' => 'required',
        ]);
        $truk->update($request->all());
        return redirect()->route('truk.index')->with('success','supir successfully updated.');
    }

    public function destroy($id)
    {
        $truk = Truk::find($id);
        $truk->delete();

        return redirect()->route('truk.index')->with('success', 'truk successfully deleted.');
    }
}
