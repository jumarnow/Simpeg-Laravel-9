<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pegawai = Pegawai::find($id);        
        return  view('pengalaman.index', compact('pegawai'));
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
        $pengalaman = new Pengalaman;
        $pengalaman-> nm_pekerjaan = $request ->nm_pekerjaan;
        $pengalaman-> d_pekerjaan = $request ->d_pekerjaan;
        $pengalaman-> pegawai_id = $request ->pegawai_id;
        $pengalaman-> save();

        return redirect ('/pegawai/'.$pengalaman->pegawai_id.'/pengalaman')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengalaman $pengalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengalaman $pengalaman)
    {
        return view('pengalaman.edit', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengalaman $pengalaman)
    {
        $pengalaman-> nm_pekerjaan = $request ->nm_pekerjaan;
        $pengalaman-> d_pekerjaan = $request ->d_pekerjaan;
        $pengalaman-> pegawai_id = $request ->pegawai_id;
        $pengalaman-> save();

        return redirect ('/pegawai/'.$pengalaman->pegawai_id.'/pengalaman')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengalaman  $pengalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengalaman $pengalaman)
    {
        $pengalaman->delete();

        return back()->with('error','Data berhasil dihapus');
    }

    public function pel($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pengalaman.create', ['pegawai' => $pegawai]);
    }
}
