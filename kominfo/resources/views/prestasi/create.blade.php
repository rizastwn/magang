@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Prestasi Baru</h2>
            </div>
            <div class="card-body">
                    <form action="/prestasi" method="POST" name="form1">
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
                            <label for="usr">Tahun:</label>
                            <input type="number" class="form-control" name="tahun">
                        </div>
        
                        <div class="form-group">
                            <label for="comment">Olahraga:</label>
                            <input type="number" class="form-control" name="olahraga">
                        <div>
                        <div class="form-group">
                            <label for="comment">TK:</label>
                            <input type="number" class="form-control" name="tk">
                        <div>
                        <div class="form-group">
                            <label for="comment">SD :</label>
                            <input type="number" class="form-control" name="sd">
                        <div>
                        <div class="form-group">
                            <label for="comment">SMP:</label>
                            <input type="number" class="form-control" name="smp">
                        <div>
                        <div class="form-group">
                            <label for="comment">SMA:</label>
                            <input type="number" class="form-control" name="sma">
                        <div>
                        <div class="form-group">
                            <label for="comment">Perguruan Tinggi:</label>
                            <input type="number" class="form-control" name="perguruanTinggi">
                        <div>
                        <div class="form-group">
                            <label for="comment">Kebersihan:</label>
                            <input type="number" class="form-control" name="kebersihan">
                        <div>
                        <div class="form-group">
                            <label for="comment">Kesenian:</label>
                            <input type="number" class="form-control" name="kesenian">
                        <div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
                    </form>
            </div>
        </div>
    </div>
@endsection