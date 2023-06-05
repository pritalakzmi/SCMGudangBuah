<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use PDF;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $role = Role::get();
	    $data = [
	            'role' => $role
	    ];

	    if($request->has('download'))
	    {
	        $pdf = PDF::loadView('role.pdf',$data);
	        return $pdf->download('role.pdf');
	    }

        return view('role.index', compact('role'));
    }

    public function create()
    {
        $role = Role::get();
        return view('role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
        ]);

        // untuk insert data ke database
        Role::create($request->all());

        return redirect('/role')->with('success', 'Ka Baru Telah Ditambahkan');
    }

    public function show()
    {
        
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->role = $request->input('role');
        $role->save();

        return redirect('/role')->with('success', 'Role Baru Telah Ditambahkan');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('role.index')->with('success', 'role successfully deleted.');
    }
}
