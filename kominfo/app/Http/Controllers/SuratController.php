<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\surat;
use DB;

class SuratController extends Controller
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
        return view('surat.create')->with('kecamatan',$kecamatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surat =  new surat;
        $surat->tahun=$request->input('tahun');
        $surat->idKecamatan=$request->input('idKecamatan');
        $surat->bulan=$request->input('bulan');
        $surat->suratMasuk=$request->input('suratMasuk');
        $surat->suratKeluar=$request->input('suratKeluar');
        $surat->save();
        return redirect('/')->with('success', 'data Surat berhasil di simpan!');
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
            ->join('surats', 'surats.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['surats.idKecamatan', '=', $kecamatan->id],
            ])
            ->select('surats.*')
            ->paginate(12);
            

        return view('surat.show', ['data' => $data, 'nama' => $kecamatan]);
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
            ->join('surats', 'surats.idKecamatan', '=', 'kecamatans.id')
            ->where([
                ['surats.id', '=', $id],
            ])
            ->select('surats.*','kecamatans.nama')
            ->first();

        return view('surat.edit', ['data' => $data]);
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
        $surat =   surat::find($id);
        $surat->suratMasuk=$request->input('suratMasuk');
        $surat->suratKeluar=$request->input('suratKeluar');
        $surat->save();
        return redirect('/')->with('success', 'data Surat berhasil di simpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = surat::find($id);
        $surat->delete();
        return redirect('/')->with('success', 'data Surat berhasil di hapus!');
    }
}
