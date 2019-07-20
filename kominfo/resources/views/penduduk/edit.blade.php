@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
            <h2>Edit Data Penduduk kecamatan {{$data->nama}} tahun {{$data->tahun}} </h2>
            </div>
            <div class="card-body">
            <form action="/penduduk/{{$data->id}}" method="POST" name="form1">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="comment">Islam:</label>
                <input type="text" value="{{$data->islam}}" class="form-control" name="islam">
                <div>
                <div class="form-group">
                    <label for="comment">Kristen Protestan:</label>
                    <input type="text" value="{{$data->kristenProtestan}}" class="form-control" name="kristenProtestan">
                <div>
                <div class="form-group">
                    <label for="comment">Kristen Katolik:</label>
                    <input type="text" value="{{$data->kristenKatolik}}" class="form-control" name="kristenKatolik">
                <div>
                <div class="form-group">
                    <label for="comment">Hindu:</label>
                    <input type="text" value="{{$data->hindu}}" class="form-control" name="hindu">
                <div>
                <div class="form-group">
                    <label for="comment">Buddha:</label>
                    <input type="text" value="{{$data->buddha}}" class="form-control" name="buddha">
                <div>
                <div class="form-group">
                    <label for="comment">konghucu:</label>
                    <input type="text" value="{{$data->konghucu}}" class="form-control" name="konghucu">
                <div>
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