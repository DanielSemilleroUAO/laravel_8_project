@extends('plantilla')

@section('title', 'Animales')

@section('contenido')
    <h1>Bienvenidos a Animales</h1>
    <ul>
        @foreach ($animales as $animal)
            <li>{{ $animal }}</li>
        @endforeach
    </ul>

    {{ $animales->links() }}

@endsection
