<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('pembayaran.create');
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
            'id_pembayaran' => 'required',
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required',
        ]);

        $create = Pembayaran::create([
            'id_pembayaran' => $request->get('id_pembayaran'),
            'id_petugas' => $request->get('id_petugas'),
            'nisn' => $request->get('nisn'),
            'tgl_bayar' => $request->get('tgl_bayar'),
            'bulan_dibayar' => $request->get('bulan_dibayar'),
            'tahun_dibayar' => $request->get('tahun_dibayar'),
            'id_spp' => $request->get('id_spp'),
            'jumlah_bayar' => $request->get('jumlah_bayar'),
        ]);

        if($create) {
            return redirect()->route('pembayaran.index')->with('success', 'Data berhasil ditambah');
        }
        return redirect()->route('pembayaran.index')->with('error', 'Data gagal ditambah');
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
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit', compact('pembayaran'));
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
        $pembayaran = Pembayaran::find($id);

        $request->validate([
            'id_pembayaran' => 'required',
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required',
        ]);
        $update = $pembayaran->update([
            'id_pembayaran' => $request->get('id_pembayaran'),
            'id_petugas' => $request->get('id_petugas'),
            'nisn' => $request->get('nisn'),
            'tgl_bayar' => $request->get('tgl_bayar'),
            'bulan_dibayar' => $request->get('bulan_dibayar'),
            'tahun_dibayar' => $request->get('tahun_dibayar'),
            'id_spp' => $request->get('id_spp'),
            'jumlah_bayar' => $request->get('jumlah_bayar'),
        ]);
        if($update) {
            return redirect()->route('pembayaran.index')->with('success', 'Data berhasil diubah');
        }

       
    return redirect()->route('pembayaran.index')->with('error', 'Data gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil dihapus');
    }
}
