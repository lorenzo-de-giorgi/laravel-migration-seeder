@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li><a href="{{route('trains.show', $train->id)}}">{{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection