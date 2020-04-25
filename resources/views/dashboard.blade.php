@extends('layouts.app')
@section('content')
@include('layouts.headers.cards')        
    <br>
        @if(session('updated'))
            <div class="alert alert-success">
                {{session('updated')}}
            </div>
        @endif
        @if(session('deleted'))
            <div class="alert alert-danger">
                {{session('deleted')}}
            </div>
        @endif     
            
        <div class="row mt-5" style="margin-left:0 !important; margin-right:0 !important;">           
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">                                                               
                                <h3 class="mb-0">Air quality components</h3>
                            </div>                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">PM (obs)</th>
                                    <th scope="col">PM (max)</th>
                                    <th scope="col">PM (min)</th>
                                    <th scope="col">AQI (max)</th>
                                    <th scope="col">AQI (min)</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record) 
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <th>{{$record->pm_obs}}</th>
                                        <td>{{$record->pm_max}}</td>
                                        <td>{{$record->pm_min}}</td>
                                        <td>{{$record->aqi_max}}</td>
                                        <td>{{$record->aqi_min}}</td>                                        
                                        <td>
                                            <a href="/update/{{$record->id}}" class="btn btn-default btn-sm">Update</a>
                                        </td> 
                                        <td>
                                            <a href="/delete/{{$record->id}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>                                                                               
                                    </tr>                                
                                @endforeach 
                            </tbody>
                        </table>                        
                    </div>
                    
                </div>
            </div>            
        </div>
        <div style="float:right; padding:10">
            {{$records->links()}}
        </div>                        
    </div>
        
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush