@extends('layouts.app') @section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Tambah Data Penduduk Baru</h2>
        </div>
        <div class="card-body">
            <form action="/penduduk" method="POST" name="form1">
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
                    <label for="comment">Islam:</label>
                    <input type="number" class="form-control" name="islam">
                <div>
                <div class="form-group">
                    <label for="comment">Kristen Protestan:</label>
                    <input type="number" class="form-control" name="kristenProtestan">
                <div>
                <div class="form-group">
                    <label for="comment">Kristen Katolik:</label>
                    <input type="number" class="form-control" name="kristenKatolik">
                <div>
                <div class="form-group">
                    <label for="comment">Hindu:</label>
                    <input type="number" class="form-control" name="hindu">
                <div>
                <div class="form-group">
                    <label for="comment">Buddha:</label>
                    <input type="number" class="form-control" name="buddha">
                <div>
                <div class="form-group">
                    <label for="comment">konghucu:</label>
                    <input type="number" class="form-control" name="konghucu">
                <div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
            </form>
            </div>
            </div>
            </div>
            @endsection