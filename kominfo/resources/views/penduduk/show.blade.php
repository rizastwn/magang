@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Jumlah Penduduk Kecamatan {{$nama->nama}}</h2>
                @if(isset($data))
                <a href="/penduduk/create" class="btn btn-success">Tambah Data Baru</a>
                @else
                <a href="/penduduk/create" class="btn btn-success">Tambah Data Baru</a>
                @endif
            </div>
            <div class="card-body">
                    <div class="">
                        <table class="table">
                                @if(isset($data))
                                <thead>
                                        <tr align="center">
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Islam</th>
                                            <th scope="col">Kristen Protestan</th>
                                            <th scope="col">Kristen Katolik</th>
                                            <th scope="col">hindu</th>
                                            <th scope="col">buddha</th>
                                            <th scope="col">konghucu</th>
                                            <th scope="col">menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr align="center">
                                                <td>{{$item->tahun}}</td>
                                                <td>{{$item->islam}}</td>
                                                <td>{{$item->kristenProtestan}}</td>
                                                <td>{{$item->kristenKatolik}}</td>
                                                <td>{{$item->hindu}}</td>
                                                <td>{{$item->buddha}}</td>
                                                <td>{{$item->konghucu}}</td>
                                                <td>
                                                    <form action="{{action('PendudukController@destroy', $item->id)}}" method="post">
                                                        @csrf
                                                        <a href="/penduduk/{{$item->id}}/edit" class="btn btn-info">edit </a>
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