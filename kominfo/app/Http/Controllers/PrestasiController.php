<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\prestasi;
use DB;
use App\jumlahPenduduk;

class PrestasiController extends Controller
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
        return view('prestasi.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi =  new prestasi;
        $prestasi->idKecamatan=$request->input('idKecamatan');
        $prestasi->tahun=$request->input('tahun');
        $prestasi->olahraga=$request->input('olahraga');
        $prestasi->tk=$request->input('tk');
        $prestasi->sd=$request->input('sd');
        $prestasi->smp=$request->input('smp');
        $prestasi->sma=$request->input('sma');
        $prestasi->perguruanTinggi=$request->input('perguruanTinggi');
        $prestasi->kesenian=$request->input('kesenian');
        $prestasi->kebersihan=$request->input('kebersihan');
        $prestasi->save();
        return redirect('/')->with('success', 'data Penduduk berhasil di simpan!');
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
            ->join('prestasis', 'prestasis.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['prestasis.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('prestasis.*')
            ->get();

        return view('prestasi.show', ['data' => $data, 'nama' => $kecamatan]);
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
            ->join('prestasis', 'prestasis.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['prestasis.id', '=', $id],
            ])
            ->select('prestasis.*','kecamatans.nama')
            ->first();

        return view('prestasi.edit', ['data' => $data]);
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
        $prestasi =  new prestasi;
        $prestasi->olahraga=$request->input('olahraga');
        $prestasi->tk=$request->input('tk');
        $prestasi->sd=$request->input('sd');
        $prestasi->smp=$request->input('smp');
        $prestasi->sma=$request->input('sma');
        $prestasi->perguruanTinggi=$request->input('perguruanTinggi');
        $prestasi->kesenian=$request->input('kesenian');
        $prestasi->kebersihan=$request->input('kebersihan');
        $prestasi->save();
        return redirect('/')->with('success', 'data Penduduk berhasil di simpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi= prestasi::find($id);
        $prestasi->delete();
        return redirect('/')->with('success', 'data Penduduk berhasil di hapus!');
    }
}
