<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('kelas.create');
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
            'id_kelas'=>'required',
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required',
        ]);

        $create = Kelas::create([
            'id_kelas'=>$request->get('id_kelas'),
            'nama_kelas'=>$request->get('nama_kelas'),
            'kompetensi_keahlian'=>$request->get('kompetensi_keahlian'),
        ]);

        if($create) {
            return redirect()->route('kelas.index')->with('success', 'Data berhasil ditambah');
        }
        return redirect()->route('kelas.index')->with('error', 'Data gagal ditambah');
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
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
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
        $kelas = Kelas::find($id);

        $request->validate([
            'id_kelas'=>'required',
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required',
        ]);
        $update = $kelas->update([
            'id_kelas'=>$request->input('id_kelas'),
            'nama_kelas'=> $request->input('nama_kelas'),
            'kompetensi_keahlian'=> $request->input('kompetensi_keahlian'),
        ]);
        if($update) {
            return redirect()->route('kelas.index')->with('success', 'Data berhasil diubah');
        }

       
    return redirect()->route('kelas.index')->with('error', 'Data gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data berhasil dihapus');
    }
}
