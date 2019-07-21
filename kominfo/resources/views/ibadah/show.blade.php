@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
            <h2>Data Jumlah Tempat Ibadah Di Kecamatan {{$nama->nama}}</h2>
            @if(isset($item))
            <a class="btn btn-info" href="/tempatibadah/{{$item->id}}/edit">Edit Data</a>

            @else
            <a href="/tempatibadah/create" class="btn btn-success">Tambah Data Baru</a>
            @endif
            </div>
            <div class="card-body col-md-8">
                    @if (isset($item))
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Agama</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>Islam</td>
                                    <td>{{$item->islam}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Kristen Protestan</td>
                                    <td>{{$item->kristenProtestan}}</td>
                                   
                                </tr>
                                <tr>
                                    <td>Kristen Katolik</td>
                                    <td>{{$item->kristenKatolik}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Hindu</td>
                                    <td>{{$item->hindu}}</td>
                                   
                                </tr>
                                <tr>
                                    <td>Buddha</td>
                                    <td>{{$item->buddha}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Konghucu</td>
                                    <td>{{$item->konghucu}}</td>
                                    
                                </tr>
                            </tbody>
                         
                            </table>    
                    @endif
            </div>
        </div>
    </div>
@endsection