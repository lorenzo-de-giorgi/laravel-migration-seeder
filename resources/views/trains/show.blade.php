@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <p>Azienda: {{ $train->azienda }}</p>
        <p>Stazione di Partenza: {{ $train->stazione_di_partenza }}</p>
        <p>Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</p>
        <p>Orario di Partenza: {{ $train->orario_di_partenza }}</p>
        <p>Orario di Arrivo: {{ $train->orario_di_arrivo }}</p>
        <p>Codice Treno: {{ $train->codice_treno }}</p>
        <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
        <p>In Orario: {{ $train->in_orario }}</p>
        <p>Cancellato: {{ $train->cancellato}}</p>
    </div>
@endsection