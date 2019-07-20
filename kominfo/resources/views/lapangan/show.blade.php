@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Data Lapangan Olahraga Kecamatan {{$nama->nama}}</h2>
                @if(isset($data))
                <a href="/lapanganolahraga/{{$nama->id}}/edit" class="btn btn-info">Edit Data Lapangan Olahraga</a>
                @else
                <a href="/lapanganolahraga/create" class="btn btn-success">Tambah Data Baru</a>
                @endif
                 
            </div>
            <div class="card-body">
                <div class="col-md-8">
                    <table class="table">
                            @if(isset($data))
                            <thead>
                                    <tr>
                                        <th scope="col">Jenis Lapangan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td >Sepak Bola</td>
                                        <td>{{$data->sepakBola}}</td>
                                    </tr>
                                    <tr>
                                        <td>Voli</td>
                                        <td>{{$data->voli}}</td>
                                    </tr>
                                    <tr>
                                        <td>Basket</td>
                                        <td>{{$data->basket}}</td>
                                    </tr>
                                    <tr>
                                        <td>Lain-Lain</td>
                                        <td>{{$data->lain}}</td>
                                    </tr>
                                    
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