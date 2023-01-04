<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pegawai = Pegawai::whereId($id)->with('pelatihan')->first();
        // dd($pegawai);
        return view('pelatihan.index', compact('pegawai'));
    }

    public function pel($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pelatihan.create', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelatihan = new Pelatihan();
        $pelatihan-> tgl_pelatihan = $request ->tgl_pelatihan;
        $pelatihan-> topik_pelatihan = $request ->topik_pelatihan;
        $pelatihan-> pegawai_id = $request ->pegawai_id;
        $pelatihan-> save();

        return redirect('/pegawai/'.$pelatihan->pegawai_id.'/pelatihan')->with('success', 'Data berhasil disimpan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
        
        // $pelatihan = Pelatihan::find($id);
        return view('pelatihan.edit', compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $pelatihan-> tgl_pelatihan = $request ->tgl_pelatihan;
        $pelatihan-> topik_pelatihan = $request ->topik_pelatihan;
        $pelatihan-> pegawai_id = $request ->pegawai_id;
        $pelatihan-> save();

        return redirect('/pegawai/'.$pelatihan->pegawai_id.'/pelatihan')->with('success', 'Data berhasil disimpan');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return back()->with('error', 'Data berhasil dihapus');
    }
}
