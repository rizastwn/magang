@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Daftar Kecamatan</h2>
                <a href="/kecamatan/create" >Tambah Kecamatan Baru</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                            <thead>
                                <tr>
                                    <td>Nama Kecamatan</td>
                                    <td>Menu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><h5><b>{{$item->nama}}</b></h5> 
                                        Luas Wilayah :{{$item->luasWilayah}} Ha <br>
                                        Jumlah Desa : {{$item->desa}} <br>
                                        Jumlah Dusun : {{$item->dusun}} <br>
                                        Jumlah RT : {{$item->rt}} <br>
                                        Jumlah RT : {{$item->rw}} <br>
                                        <a href="/kecamatan/{{$item->id}}/edit" class="btn btn-info">Ubah Data Kecamatan</a>
                                        
                                    </td>
                                    <td>
                                        <a href="/lapanganolahraga/{{$item->id}}">Data Lapangan Olahraga</a><br>
                                        <a href="/penduduk/{{$item->id}}">Data Jumlah Penduduk</a><br>
                                        <a href="/prestasi/{{$item->id}}">Data Jumlah Prestasi</a><br>
                                        <a href="/surat/{{$item->id}}">Data Jumlah Surat</a><br>
                                        <a href="/tempatwisata/{{$item->id}}">Data Jumlah wisata</a><br>
                                        <a href="/tempatibadah/{{$item->id}}">Data Jumlah Tempat Ibadah</a> <br>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
