@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Jumlah Penduduk Kecamatan {{$nama->nama}}</h2>
                @if(isset($data))
                <a href="/prestasi/create" class="btn btn-success">Tambah Data Baru</a>
                @else
                <a href="/prestasi/create" class="btn btn-success">Tambah Data Baru</a>
                @endif
            </div>
            <div class="card-body">
            <div class="">
                    <table class="table">
                            @if(isset($data))
                            <thead>
                                    <tr align="center">
                                        <th scope="col">Tahun</th>
                                        <th scope="col">olahraga</th>
                                        <th scope="col">TK</th>
                                        <th scope="col">SD</th>
                                        <th scope="col">SMP</th>
                                        <th scope="col">SMA</th>
                                        <th scope="col">Perguruan Tinggi</th>
                                        <th scope="col">Kebersihan</th>
                                        <th scope="col">Kesenian</th>
                                        <th scope="col">menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr align="center">
                                            <td>{{$item->tahun}}</td>
                                            <td>{{$item->olahraga}}</td>
                                            <td>{{$item->tk}}</td>
                                            <td>{{$item->sd}}</td>
                                            <td>{{$item->smp}}</td>
                                            <td>{{$item->sma}}</td>
                                            <td>{{$item->perguruanTinggi}}</td>
                                            <td>{{$item->kebersihan}}</td>
                                            <td>{{$item->kesenian}}</td>
                                            <td>
                                                <form action="{{action('PrestasiController@destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    <a href="/prestasi/{{$item->id}}/edit" class="btn btn-info">edit </a>
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                    
                                </tbody>
                            @else
                            Data Belum ada
                            @endif
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection