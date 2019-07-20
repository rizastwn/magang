@extends('layouts.app') @section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Ubah Data Kecamatan</h2>
        </div>
        <div class="card-body">
            <form action="/kecamatan/{{$data->id}}" method="POST" name="form1">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="usr">Nama Kecamatan:</label>
                    <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                </div>

                <div class="form-group">
                <label for="comment">Luas Wilayah:</label>
                <input type="text" class="form-control" name="luasWilayah" value="{{$data->luasWilayah}}">
                <div>
                <div class="form-group">
                <label for="comment">Jumlah Desa:</label>
                <input type="text" value="{{$data->desa}}" class="form-control" name="desa">
                <div>
                <div class="form-group">
                <label for="comment">Jumlah Dusun:</label>
                <input type="text" value="{{$data->dusun}}" class="form-control" name="dusun">
                <div>
                <div class="form-group">
                <label for="comment">Jumlah RT:</label>
                <input type="text" value="{{$data->rt}}" class="form-control" name="rt">
                <div>
                <div class="form-group">
                <label for="comment">Jumlah RW:</label>
                <input type="text" value="{{$data->rw}}" class="form-control" name="rw">
                <div>
                <br>
                <div class="hidden"></div>
                <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan
                    Data</button>
                <form method="post">
                    <input type="hidden" name="_method" value="put" />
                </form>

            </form>
        </div>
    </div>
</div>
@endsection