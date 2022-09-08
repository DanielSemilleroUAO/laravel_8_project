@extends('plantilla')

@section('style')
    <link rel="stylesheet" href="{{ asset('../../../resources/css/app.css') }}">
@endsection

@section('title', 'Plantas')

@section('contenido')
    <h1>Bienvenidos a Plantas</h1>

    @foreach ($plantas as $planta)
        <ul>
            <strong> Tipo de planta:</strong> {{ $planta->getTipoPlanta->nombre }}
            <br>
            Importancia: {{ $planta->importancia }}
            <br>
            Locacion: {{ $planta->getLocacion->nombre }}
            Latitud: {{ $planta->getLocacion->latitud }}
            <br>
            Unidad de Medida: {{ $planta->getUnidadMedida->nombre }}
            <br>
            Familia: {{ $planta->getFamlia->nombre }}
            <br>
            Genero: {{ $planta->getGenero->nombre }}
            <br>
            Especie: {{ $planta->getEspecie->nombre }}
            <br>
            Fotos: {{ $planta->getFotos->nombre }}
            <hr>
        </ul>
    @endforeach

    <div>Color</div>

    {{ $plantas->links() }}

@endsection
