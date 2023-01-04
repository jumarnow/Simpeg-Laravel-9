<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negara = Negara::all();
        return view('negara.tampil', compact('negara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('negara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $negara = new Negara;
        $negara-> nm_negara = $request ->nm_negara;
        $negara-> save();

        return redirect ('negara')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function show(Negara $negara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function edit(Negara $negara)
    {
        return view('negara.edit', compact('negara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Negara $negara)
    {
        $negara-> nm_negara = $request ->nm_negara;
        $negara-> save();

        return redirect ('negara')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Negara $negara)
    {
        $negara->delete();

        return redirect('negara')->with('error','Data berhasil dihapus');
    }
}
