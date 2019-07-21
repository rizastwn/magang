@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Data Jumlah Wisata di Kecamatan </h2>
            </div>
            <div class="card-body">
                    <form action="/tempatwisata" method="POST" name="form1">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label  for="">Kecamatan</label>
                                <select class="form-control" name="idKecamatan" id="">
                                    @foreach ($kecamatan as $item)
                                    <option class="form-group" value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select> 
                            </div>
                        <div class="form-group">
                            <label for="comment">Wisata Alam:</label>
                            <input type="number"  class="form-control" name="alam">
                        <div>
                         <div class="form-group">
                            <label for="comment">Wisata Edukasi:</label>
                            <input type="number"  class="form-control" name="edukasi">
                        <div>
                        <div class="form-group">
                            <label for="comment">Surat Budaya:</label>
                            <input type="number"  class="form-control" name="budaya">
                        <div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
                </form>
            </div>
        </div>
    </div>
@endsection