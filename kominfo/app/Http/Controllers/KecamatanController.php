<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kecamatan::all();
        return view('home')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new kecamatan;
        $data->nama= $request->input('nama');
        $data->luasWilayah= $request->input('luasWilayah');
        $data->desa= $request->input('desa');
        $data->dusun= $request->input('dusun');
        $data->rw= $request->input('rt');
        $data->rw= $request->input('');
        $data->save();
        return redirect('/')->with('success', 'data kecamatan berhasil di simpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = kecamatan::find($id);
        return view('kecamatan.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kecamatan::find($id);
        return view('kecamatan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = kecamatan::find($id);
        $data->nama= $request->input('nama');
        $data->luasWilayah= $request->input('luasWilayah');
        $data->desa= $request->input('desa');
        $data->dusun= $request->input('dusun');
        $data->rt= $request->input('rt');
        $data->rw= $request->input('rw');
        $data->save();
        return redirect('/')->with('success', 'data kecamatan berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
