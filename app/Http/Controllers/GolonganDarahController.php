<?php

namespace App\Http\Controllers;

use App\Models\GolonganDarah;
use Illuminate\Http\Request;

class GolonganDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $darah = GolonganDarah::all();
        return view('darah.tampil', compact('darah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('darah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $darah = new GolonganDarah();
        $darah-> nama_gol_darah = $request ->nama_gol_darah;
        $darah-> save();

        return redirect ('darah')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function show(GolonganDarah $golonganDarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $darah = GolonganDarah::find($id);
        return view('darah.edit', compact('darah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GolonganDarah $golonganDarah)
    {
        $golonganDarah-> nama_gol_darah = $request ->nama_gol_darah;
        $golonganDarah-> save();

        return redirect ('darah')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $golonganDarah = GolonganDarah::find($id);
        $golonganDarah->delete();

        return redirect('darah')->with('error','Data berhasil dihapus');
    }
}
