@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data Surat Masuk dan Surat Keluar Kecamatan {{$data->nama}}</h2>
                <h3>Tahun : {{$data->tahun}}</h3>
                <h3>Bulan : {{$data->bulan}}</h3>
            </div>
            <div class="card-body">
                    <form action="/surat/{{$data->id}}" method="POST" name="form1">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="comment">Surat Masuk:</label>
                            <input type="number" value="{{$data->suratMasuk}}" class="form-control" name="suratMasuk">
                        <div>
                        <div class="form-group">
                            <label for="comment">Surat Keluar:</label>
                            <input type="number" value="{{$data->suratKeluar}}" class="form-control" name="suratKeluar">
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