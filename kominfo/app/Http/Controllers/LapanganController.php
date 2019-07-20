<?php

namespace App\Http\Controllers;

use App\kecamatan;
use DB;
use Illuminate\Http\Request;
use App\lapanganOlahraga;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = kecamatan::all();
        return view('lapangan.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lapangan = new lapanganOlahraga;
        $lapangan->idKecamatan= $request->input('idKecamatan');
        $lapangan->sepakBola= $request->input('sepakBola');
        $lapangan->voli= $request->input('voli');
        $lapangan->basket= $request->input('basket');
        $lapangan->lain= $request->input('lain');
        $lapangan->save();
        return redirect('/')->with('success', 'data Lapangan Olahraga berhasil di simpan!');

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
            ->join('lapangan_olahragas', 'lapangan_olahragas.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['lapangan_olahragas.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('lapangan_olahragas.*')
            ->first();

        return view('lapangan.show', ['data' => $data, 'nama' => $kecamatan]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = kecamatan::find($id);
        $data = DB::table('kecamatans')
            ->join('lapangan_olahragas', 'lapangan_olahragas.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['lapangan_olahragas.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('lapangan_olahragas.*')
            ->first();

        return view('lapangan.edit', ['data' => $data, 'nama' => $kecamatan]);
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

        $lapangan= lapanganOlahraga::find($id);
        $lapangan->sepakBola= $request->input('sepakBola');
        $lapangan->voli= $request->input('voli');
        $lapangan->basket= $request->input('basket');
        $lapangan->lain= $request->input('lain');
        $lapangan->save();
        return redirect('/')->with('success', 'data Lapangan Olahraga berhasil di simpan!');
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
