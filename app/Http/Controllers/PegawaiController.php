<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Role;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::with('role')->get();
        return view('admin.admin-pegawai',compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.admin-pegawai-create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'no_telp' => 'required',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('admin-pegawai')->with('success','Pegawai created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        $roles = Role::all();
        return view('admin.admin-pegawai-edit',compact('pegawai','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'no_telp' => 'required',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai ->update($request->all());
        
        return redirect()->route('admin-pegawai')->with('success','Pegawai updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect()->route('admin-pegawai')->with('success','Pegawai deleted successfully.');
    }
}
