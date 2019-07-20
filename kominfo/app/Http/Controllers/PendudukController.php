<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\jumlahPenduduk;
use DB;
class PendudukController extends Controller
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
        return view('penduduk.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penduduk =  new jumlahPenduduk;
        $penduduk->idKecamatan=$request->input('idKecamatan');
        $penduduk->tahun=$request->input('tahun');
        $penduduk->islam=$request->input('islam');
        $penduduk->kristenProtestan=$request->input('kristenProtestan');
        $penduduk->kristenKatolik=$request->input('kristenKatolik');
        $penduduk->hindu=$request->input('hindu');
        $penduduk->buddha=$request->input('buddha');
        $penduduk->konghucu=$request->input('konghucu');
        $penduduk->save();
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
            ->join('jumlah_penduduks', 'jumlah_penduduks.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['jumlah_penduduks.idKecamatan', '=', $id],
            ])
            ->select('jumlah_penduduks.*')
            ->get();

        return view('penduduk.show', ['data' => $data, 'nama' => $kecamatan]);
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
            ->join('jumlah_penduduks', 'jumlah_penduduks.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['jumlah_penduduks.id', '=', $id],
            ])
            ->select('jumlah_penduduks.*','kecamatans.nama')
            ->first();

        return view('penduduk.edit', ['data' => $data]);
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
        $penduduk =  jumlahPenduduk::find($id);

        $penduduk->islam=$request->input('islam');
        $penduduk->kristenProtestan=$request->input('kristenProtestan');
        $penduduk->kristenKatolik=$request->input('kristenKatolik');
        $penduduk->hindu=$request->input('hindu');
        $penduduk->buddha=$request->input('buddha');
        $penduduk->konghucu=$request->input('konghucu');
        $penduduk->save();
        return redirect('/')->with('success', 'data Penduduk berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $penduduk= jumlahPenduduk::find($id);
        $penduduk->delete();
        return redirect('/')->with('success', 'data Penduduk berhasil di hapus!');
    }
}
