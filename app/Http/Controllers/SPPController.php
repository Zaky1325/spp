<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp = SPP::all();
        return view('spp.index', compact('spp'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('spp.create');
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
            'tahun' => 'required',
            'nominal' => 'required',
        ]);

        $create = Spp::create([
            'tahun' => $request->get('tahun'),
            'nominal' => $request->get('nominal'),
        ]);

        if($create) {
            return redirect()->route('spp.index')->with('success', 'Data berhasil ditambah');
        }
        return redirect()->route('spp.index')->with('error', 'Data gagal ditambah');
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
        $spp = Spp::find($id);
        return view('spp.edit', compact('spp'));
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
        $spp = Spp::find($id);

        $request->validate([
            'tahun'=>'required',
            'nominal'=>'required',
        ]);
        $update = $spp->update([
            'tahun' => $request->input('tahun'),
            'nominal' => $request->input('nominal'),
        ]);
        if($update) {
            return redirect()->route('spp.index')->with('success', 'Data berhasil diubah');
        }

       
    return redirect()->route('spp.index')->with('error', 'Data gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}
