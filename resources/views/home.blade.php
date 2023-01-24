@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-7">
        @foreach ($trains as $train)
            <div class="card mb-3">
                <div class="card-header">{{$train->company}}</div>

                <div class="card-body d-flex justify-conten-between">
                    <div class="flex-fill">
                        <div>{{$train->departure_time}}</div>
                        <h5>{{$train->departure_station}}</h5>
                    </div>
                    <div class="flex-fill text-end">
                        <div>{{$train->arrival_time}}</div>
                        <h5>{{$train->arrival_station}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    

@endsection