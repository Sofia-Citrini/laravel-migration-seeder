@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-7">
        @foreach ($trains as $train)
            <div>Partenza il {{date("d/m/Y", strtotime($train->departure_time))}} </div>

            <div class="card mb-3">
                <div class="card-header">{{$train->company}} - {{$train->train_code}}</div>

                <div class="card-body d-flex justify-conten-between">
                    <div class="flex-fill">
                        <div class="fs-4 text-success fw-bold">{{date("H:i", strtotime($train->departure_time))}}</div>
                        <h5>{{$train->departure_station}}</h5>
                    </div>
                    <div class="flex-fill text-end">
                        <div class="fs-4 text-success fw-bold">{{date("H:i", strtotime($train->arrival_time))}}</div>
                        <h5>{{$train->arrival_station}}</h5>
                    </div>
                </div>

                @if($train->on_time === 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        in ritardo
                    </span>
                @endif
                
                
            </div>
        @endforeach
    </div>
</div>
    

@endsection