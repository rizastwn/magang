@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Ubah Data Prestasi Kecamatan {{$data->nama}} Tahun {{$data->tahun}}</h2>
            </div>
            <div class="card-body">
                <form action="/prestasi/{{$data->id}}" method="POST" name="form1">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <div class="form-group">
                        <label for="comment">Olahraga:</label>
                        <input type="number" value="{{$data->olahraga}}" class="form-control" name="olahraga">
                    <div>
                    <div class="form-group">
                        <label for="comment">TK:</label>
                        <input type="number" value="{{$data->tk}}" class="form-control" name="tk">
                    <div>
                    <div class="form-group">
                        <label for="comment">SD :</label>
                        <input type="number" value="{{$data->sd}}" class="form-control" name="sd">
                    <div>
                    <div class="form-group">
                        <label for="comment">SMP:</label>
                        <input type="number" value="{{$data->smp}}" class="form-control" name="smp">
                    <div>
                    <div class="form-group">
                        <label for="comment">SMA:</label>
                        <input type="number" value="{{$data->sma}}" class="form-control" name="sma">
                    <div>
                    <div class="form-group">
                        <label for="comment">Perguruan Tinggi:</label>
                        <input type="number" value="{{$data->perguruanTinggi}}" class="form-control" name="perguruanTinggi">
                    <div>
                    <div class="form-group">
                        <label for="comment">Kebersihan:</label>
                        <input type="number" value="{{$data->kebersihan}}" class="form-control" name="kebersihan">
                    <div>
                    <div class="form-group">
                        <label for="comment">Kesenian:</label>
                        <input type="number" value="{{$data->kesenian}}" class="form-control" name="kesenian">
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