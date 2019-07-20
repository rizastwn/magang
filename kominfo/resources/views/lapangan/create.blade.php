@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Data Lapangan Olahraga
            </div>
            <div class="card-body">
                    <form action="/lapanganolahraga" method="POST" name="form1">
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
                                <label for="usr">Sepak Bola:</label>
                                <input type="text" class="form-control" name="sepakBola"
                                        >
                        </div>
                        <div class="form-group">
                                <label for="usr">Voli:</label>
                                <input type="text" class="form-control" name="voli"
                                        >
                        </div>
                        <div class="form-group">
                                <label for="usr">Basket:</label>
                                <input type="text" class="form-control" name="basket"
                                        >
                        </div>
                        <div class="form-group">
                                <label for="usr">Lain-lain:</label>
                                <input type="text" class="form-control" name="lain"
                                        >
                        </div>
                
                       
                    <br>
                    <button type="submit" class="btn btn-primary" id="Submit"name="Submit">simpan data</button>
                        </form>
                      
            </div>
        </div>
    </div>
@endsection