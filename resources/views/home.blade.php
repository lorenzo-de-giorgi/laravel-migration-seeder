@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <a href="{{route('trains.index')}}" class="btn btn-danger">Clicca per vedere tutti i treni</a>
        </div> 
    </div>
@endsection