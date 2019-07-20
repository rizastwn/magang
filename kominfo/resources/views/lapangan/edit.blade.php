@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="card">
                    <div class="card-header">
                            <h2>Edit Data Lapangan Kecamatan {{$nama->nama}} </h2>
                    </div>
                    <div class="card-body">
                    <form action="/lapanganolahraga/{{$data->id}}" method="POST" name="form1">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <label for="usr">Sepak Bola:</label>
                            <input type="text" class="form-control" name="sepakBola"
                                    value="{{$data->sepakBola}}">
                    </div>
                    <div class="form-group">
                            <label for="usr">Voli:</label>
                            <input type="text" class="form-control" name="voli"
                                    value="{{$data->voli}}">
                    </div>
                    <div class="form-group">
                            <label for="usr">Basket:</label>
                            <input type="text" class="form-control" name="basket"
                                    value="{{$data->basket}}">
                    </div>
                    <div class="form-group">
                            <label for="usr">Lain-lain:</label>
                            <input type="text" class="form-control" name="lain"
                                    value="{{$data->lain}}">
                    </div>
            
                   
                            <br>
                            <div class="hidden"></div>
                            <button type="submit" class="btn btn-primary" id="Submit"
                            name="Submit">simpan data</button>
                            <form method="post">
                            <input type="hidden" name="_method" value="put" />
                            </form>
                    </form>
                    </div>
            
            </div>
    </div>
@endsection