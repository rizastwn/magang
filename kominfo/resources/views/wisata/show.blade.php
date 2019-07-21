@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Data Tempat Wisata Kecamatan {{$nama->nama}}</h2>
                @if(isset($data))
                <a href="/tempatwisata/create" class="btn btn-success">Tambah Data Baru</a>
                @else
                
                @endif
                 
            </div>
            <div class="card-body col-md-8">
            <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Tempat Wisata</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>Wisata Alam</td>
                            <td>{{$item->alam}}</td>
                            <td>
                            <form action="{{action('TempatWisataController@destroy', $item->id)}}" method="post">
                            @csrf
                            <a href="/tempatwisata/{{$item->id}}/edit" class="btn btn-info">edit </a>
                            <input name="_method" type="hidden" value="DELETE">
                            
                            </form>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                            <tr>
                                <td>Wisata Budaya</td>
                                <td>{{$item->budaya}}</td>
                                <td>
                                <form action="{{action('TempatWisataController@destroy', $item->id)}}" method="post">
                                @csrf
                                <a href="/tempatwisata/{{$item->id}}/edit" class="btn btn-info">edit </a>
                                <input name="_method" type="hidden" value="DELETE">
                                
                                </form>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                                <tr>
                                    <td>Wisata Edukasi</td>
                                    <td>{{$item->edukasi}}</td>
                                    <td>
                                    <form action="{{action('TempatWisataController@destroy', $item->id)}}" method="post">
                                    @csrf
                                    <a href="/tempatwisata/{{$item->id}}/edit" class="btn btn-info">edit </a>
                                    <input name="_method" type="hidden" value="DELETE">
                                    
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