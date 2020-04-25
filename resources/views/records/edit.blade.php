@extends('layouts.app')
@section('content')
    @include('layouts.headers.cards')
    <br><br>
    <div class="container"><br>
        <h2> Edit record N_{{$record->id}}</h2>            
        <form action="/update/{{$record->id}}" method="POST" enctype="multipart/form-data"> 
            @csrf                           
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="text">PM (obs) </label>
                        <input class="form-control" type="number" step="0.01" id="text1" style="height:30px" name="pm_obs" value="{{$record->pm_obs}}">
                    </div>
                    <div class="form-group">
                        <label for="text2">PM (max) </label>
                        <input class="form-control" type="number" step="0.01" id="text2" style="height:30px" name="pm_max" value="{{$record->pm_max}}">
                    </div>
                    <div class="form-group">
                        <label for="text3">PM (min) </label>
                        <input class="form-control" type="number" step="0.01" id="text3" style="height:30px" name="pm_min" value="{{$record->pm_min}}">
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="text4">AQI (max) </label>
                        <input class="form-control" type="number" step="0.01" id="text4" style="height:30px" name="aqi_max" value="{{$record->aqi_max}}">
                    </div>
                    <div class="form-group">
                        <label for="text5">AQI (min) </label>
                        <input class="form-control" type="number" step="0.01" id="text5" style="height:30px" name="aqi_min" value="{{$record->aqi_min}}">
                    </div>                    
                </div>

            </div>
            <button class="btn btn-success" style="float:right; ">Publish</button>    
        </form>
    </div>


@endsection