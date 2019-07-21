@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Jumlah Wisata di Kecamatan {{$data->nama}}</h2>
            </div>
            <div class="card-body">
                <form action="/tempatwisata/{{$data->id}}" method="POST" name="form1">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="comment">Wisata Alam:</label>
                        <input type="number" value="{{$data->alam}}" class="form-control" name="alam">
                    <div>
                     <div class="form-group">
                        <label for="comment">Wisata Edukasi:</label>
                        <input type="number" value="{{$data->edukasi}}" class="form-control" name="edukasi">
                    <div>
                    <div class="form-group">
                        <label for="comment">Surat Budaya:</label>
                        <input type="number" value="{{$data->budaya}}" class="form-control" name="budaya">
                    <div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
                <form method="post">
                        <input type="hidden" name="_method" value="put" />
                        </form>
            </form>
            </div>
        </div>
    </div>
@endsection