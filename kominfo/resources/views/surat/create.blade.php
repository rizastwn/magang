@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">

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
                            <label for="comment">Bulan:</label>
                            <select class="form-control"  name="bulan" id="">
                                <option class="form-group" value="januari">januari</option>
                                <option class="form-group" value="febuari">febuari</option >
                                <option  class="form-group"value="maret">maret</option>
                                <option class="form-group" value="april">april</option>
                                <option class="form-group" value="juni">mei</option>
                                <option class="form-group" value="julni">juni</option>
                                <option class="form-group" value="juni">juli</option>
                                <option class="form-group"value="agustus">agustus</option>
                                <option class="form-group" value="september">september</option>
                                <option class="form-group" value="oktober">oktober</option>
                                <option class="form-group" value="november">november</option>
                                <option class="form-group" value="desember">desember</option>
                            </select>
                        <div>
                        <div class="form-group">
                            <label for="comment">Surat Masuk:</label>
                            <input type="number" class="form-control" name="suratMasuk">
                        <div>
                        <div class="form-group">
                            <label for="comment">Surat Keluar:</label>
                            <input type="number" class="form-control" name="suratKeluar">
                        <div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="Submit" name="Submit">simpan data</button>
                    </form>
            </div>
        </div>
    </div>
@endsection