<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\tempatWisata;
use DB;
class TempatWisataController extends Controller
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
        return view('wisata.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata =  new tempatWisata();
        $wisata->idKecamatan=$request->input('idKecamatan');
        $wisata->alam=$request->input('alam');
        $wisata->edukasi=$request->input('edukasi');
        $wisata->budaya=$request->input('budaya');
        $wisata->save();
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
            ->join('tempat_wisatas', 'tempat_wisatas.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['tempat_wisatas.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('tempat_wisatas.*')
            ->get();

        return view('wisata.show', ['data' => $data, 'nama' => $kecamatan]);
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
            ->join('tempat_wisatas', 'tempat_wisatas.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['tempat_wisatas.id', '=', $id],
            ])
            ->select('tempat_wisatas.*','kecamatans.nama')
            ->first();

        return view('wisata.edit', ['data' => $data]);
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
        $wisata =  tempatWisata::find($id);
        $wisata->alam=$request->input('alam');
        $wisata->edukasi=$request->input('edukasi');
        $wisata->budaya=$request->input('budaya');
        $wisata->save();
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
        
    }
}
