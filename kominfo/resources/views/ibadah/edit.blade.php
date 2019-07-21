@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Ubah data Tempat Ibadah</h2>
            </div>
            <div class="card-body">
                <form action="/tempatibadah/{{$data->id}}" method="POST" name="form1">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                            <label for="usr">islam:</label>
                            <input type="text" class="form-control" name="islam"
                                    >
                    </div>
                    <div class="form-group">
                            <label for="usr">Kristen Protestan:</label>
                            <input type="text" class="form-control" name="kristenProtestan"
                                    >
                    </div>
                    <div class="form-group">
                            <label for="usr">Kristen Katolik:</label>
                            <input type="text" class="form-control" name="kristenKatolik"
                                    >
                    </div>
                    <div class="form-group">
                        <label for="usr">hindu:</label>
                        <input type="text" class="form-control" name="hindu"
                               >
                </div>
                    <div class="form-group">
                            <label for="usr">buddha:</label>
                            <input type="text" class="form-control" name="buddha"
                                   >
                    </div>
                    <div class="form-group">
                        <label for="usr">konghucu:</label>
                        <input type="text" class="form-control" name="konghucu"
                                >
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