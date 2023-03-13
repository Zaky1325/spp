<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;


class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'role' => 'required',
        ]);

        $create = Petugas::create([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'nama_petugas' => $request->get('nama_petugas'),
            'role' => $request->get('role'),

        ]);
        
        
        
        if($create) {
            return redirect()->route('petugas.index')->with('success', 'Data berhasil ditambah');
        }
        return redirect()->route('petugas.index')->with('error', 'Data gagal ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::find($id);
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {   
        $petugas = Petugas::find($id);

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'role' => 'required',
        ]);
        $update = $petugas->update([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'nama_petugas' => $request->get('nama_petugas'),
            'role' => $request->get('role'),
        ]);
        if($update) {
            return redirect()->route('petugas.index')->with('success', 'Data berhasil diubah');
        }

       
    return redirect()->route('petugas.index')->with('error', 'Data gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $petugas = Petugas::find($id);
        $petugas->delete();
        return redirect()->route('petugas.index')->with('success', 'Data berhasil dihapus');
    }
}
