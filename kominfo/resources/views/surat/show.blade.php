@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Jumlah Surat Masuk dan Keluar Kecamatan {{$nama->nama}}</h2>
                <a href="/surat/create" class="btn btn-info">tambah data baru</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Surat Masuk</th>
                            <th>Surat Keluar</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>{{$item->tahun}}</td>
                            <td>{{$item->bulan}}</td>
                            <td>{{$item->suratMasuk}}</td>
                            <td>{{$item->suratKeluar}}</td>
                            <td>
                                    <form action="{{action('SuratController@destroy', $item->id)}}" method="post">
                                            @csrf
                                            <a href="/surat/{{$item->id}}/edit" class="btn btn-info">edit </a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                            </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>
@endsection