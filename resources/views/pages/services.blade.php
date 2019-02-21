@extends('layouts.app')

@section('content')
    <h3>{{$title}}</h3>
    <ul class="list-group">
        @if(count($services) > 0)
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        @endif
    </ul>
@endsection