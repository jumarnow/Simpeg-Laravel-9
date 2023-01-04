<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\GolonganDarah;
use App\Models\Keluarga;
use App\Models\Negara;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use PDF;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('nama','asc');
        if (request()->nama) {
            $pegawai = $pegawai->where('nama','like','%'.request()->nama.'%');
        }
        $limit = 10;
        if (request()->limit) {
            $limit = request()->limit;
        }
        $pegawai = $pegawai->paginate($limit);
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['agama'] = Agama::all();
        $data['negara'] = Negara::all();
        $data['darah'] = GolonganDarah::all();
        $data['keluarga'] = Keluarga::all();
        return view('pegawai.create_edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nip = $request ->nip;
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->agama_id = $request ->agama_id;
        $pegawai->negara_id = $request ->negara_id;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->skeluarga_id = $request ->skeluarga_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;        
        $pegawai->save();

        return redirect('pegawai')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view ('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        $data['agama'] = Agama::all();
        $data['negara'] = Negara::all();
        $data['darah'] = GolonganDarah::all();
        $data['keluarga'] = Keluarga::all();
        return view('pegawai.create_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->nip = $request ->nip;
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->agama_id = $request ->agama_id;
        $pegawai->negara_id = $request ->negara_id;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->skeluarga_id = $request ->skeluarga_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;        
        $pegawai->save();

        return redirect('pegawai')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return back()->with('error', 'Data berhasil dihapus');
    }
    
    public function pdf()
    {
        $pegawai=Pegawai::all();
        $pdf = PDF::loadView('pegawai.pdf', ['pegawai'=>$pegawai]);
        return $pdf->download('pegawai.pdf');
    }
}
