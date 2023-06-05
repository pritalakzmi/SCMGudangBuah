<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\User;
use PDF;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $pengguna = User::get();
        $data = [
            'pengguna' => $pengguna
        ];
        if($request->has('download'))
        {
            $pdf = PDF::loadView('pengguna.pdf',$data);
            return $pdf->download('pengguna.pdf');
        }
        return view('pengguna.index',compact('pengguna'));
    }

    

    public function show()
    {
        
    }

    public function edit($id)
    {

        $pengguna = User::find($id);
        return view('pengguna.edit',compact('pengguna'));
    }

    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $pengguna->update($request->all());
        return redirect()->route('pengguna.index')->with('success','pengguna pengiriman successfully updated.');
    }

    public function destroy($id)
    {
        $pengguna = User::find($id);
        $pengguna->delete();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna successfully deleted.');
    }
}
