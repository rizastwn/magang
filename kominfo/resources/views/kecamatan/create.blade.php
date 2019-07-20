@extends('layouts.app')
@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Tambah Kecamatan Baru</h1>
            </div>
            <div class="card-body">
                <form action="/kecamatan" method="POST" name="form1" >
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="usr">Nama Kecamatan:</label>
                    <input type="text" class="form-control" name="nama">
                    </div>
            
                    <div class="form-group">
                    <label for="comment">Luas Wilayah:</label>
                    <input type="text" class="form-control" name="luasWilayah">
                    <div>
                    <div class="form-group">
                    <label for="comment">Jumlah Desa:</label>
                    <input type="text" class="form-control" name="desa">
                    <div>
                    <div class="form-group">
                    <label for="comment">Jumlah Dusun:</label>
                    <input type="text" class="form-control" name="dusun">
                    <div>
                    <div class="form-group">
                    <label for="comment">Jumlah RT:</label>
                    <input type="text" class="form-control" name="rt">
                    <div>
                    <div class="form-group">
                    <label for="comment">Jumlah RW:</label>
                    <input type="text" class="form-control" name="rw">
                    <div>
                        <br>
                    <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
                </form>
            </div>
    
        </div>
        
        
          
    </div>
    
@endsection