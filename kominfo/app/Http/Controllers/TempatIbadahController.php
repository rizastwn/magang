<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\tempatIbadah;
use Illuminate\Support\Facades\DB;

class TempatIbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = kecamatan::all();
        return view('ibadah.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ibadah =  new tempatWisata();
        $ibadah->idKecamatan=$request->input('idKecamatan');
        $ibadah->islam=$request->input('alam');
        $ibadah->kristenProtestan=$request->input('kristenProtestan');
        $ibadah->kristenKatolik=$request->input('kristenKatolik');
        $ibadah->hindu=$request->input('hindu');
        $ibadah->buddha=$request->input('buddha');
        $ibadah->konghucu=$request->input('konghucu');
        $ibadah->save();
        return redirect('/')->with('success', 'data Tempat Ibadah Telah Disimpan berhasil di simpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecamatan = kecamatan::find($id);
        $data = DB::table('kecamatans')
            ->join('tempat_ibadahs', 'tempat_ibadahs.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['tempat_ibadahs.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('tempat_ibadahs.*')
            ->first();

        return view('ibadah.show', ['item' => $data, 'nama' => $kecamatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('kecamatans')
            ->join('tempat_ibadahs', 'tempat_ibadahs.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['tempat_ibadahs.id', '=', $id],
            ])
            ->select('tempat_ibadahs.*','kecamatans.nama')
            ->first();

        return view('ibadah.edit', ['data' => $data]);
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
        $ibadah = tempatWisata::find($id);
        $ibadah->islam=$request->input('alam');
        $ibadah->kristenProtestan=$request->input('kristenProtestan');
        $ibadah->kristenKatolik=$request->input('kristenKatolik');
        $ibadah->hindu=$request->input('hindu');
        $ibadah->buddha=$request->input('buddha');
        $ibadah->konghucu=$request->input('konghucu');
        $ibadah->save();
        return redirect('/')->with('success', 'data Tempat Ibadah Telah Disimpan berhasil di simpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
