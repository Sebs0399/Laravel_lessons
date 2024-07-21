@extends('layaouts\landing')

@section('title', 'Services')

@section('content')
    <h1>Página de Servicios</h1>

    @component('_components.card')
        @slot('title', 'servicio1')
        @slot('content', 'Descripción del servicio 1...')
    @endcomponent

    @component('_components.card')
        @slot('title', 'servicio2')
        @slot('content', 'Descripción del servicio 2...')
    @endcomponent
@endsection
