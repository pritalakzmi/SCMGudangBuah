<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supir;
use App\Models\User;
use PDF;

class SupirController extends Controller
{
    public function index()
    {
        $user = User::get();
        $supir = Supir::select(
            'supir.id as id',
            'users.id as idu',// ngambil field id dari tb user
            'users.name as nama',
            'supir.sim as sim',
            'supir.no_telp as no',

        )->leftJoin('users','users.id','=','supir.user_id')
        ->get();
        return view('supir.index',compact('supir','user'))->with('i', 0);
    }


    public function create()
    {
        $supir = Supir::get();
        $user = User::all();
        return view('supir.create', compact('supir','user'));
    }


    public function store(Request $request)
    {
    	$this->validate($request,[
    		'user_id' => 'required',
            'sim' => 'required',
            'no_telp' => 'required'
    	]);
 
        Supir::create($request->all());
    	return redirect()->route('supir.index');
    }
    public function edit($id)
    {
        $user = User::all();
        $supir = Supir::find($id);
        return view('supir.edit', compact('supir','user'));
    }
    public function update(Request $request, $id)
    {
        //validasi buat memunculkan pesan eror jika belum diisi
        $this->validate($request,[
    		'user_id' => 'required',
            'sim' => 'required',
            'no_telp' => 'required'
    	]);

        $supir = supir::findOrFail($id);
        $supir->update($request->all());
        return redirect()->route('supir.index')
        ->with('success', 'Data Supir berhasil diperbarui.');
    }
    public function delete($id)
    {
        $supir = Supir::find($id);
        $supir->delete();
        return redirect()->back();
    }
}
