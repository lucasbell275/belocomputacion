@extends('layouts.app')
@section('title', $computadora->nombre)
@section('content')
    <body class="min-h-screen flex flex-col flex-grow bg-gray-100">
        <div class="flex flex-col flex-grow">
            <h2>{{ $computadora->nombre }}</h2>
            <p>Stock: {{ $computadora->stock }}</p>
            <p>Precio: ${{ $computadora->precio }}</p>
            @if ($computadora   ->oferta)
                <p><strong>¡En oferta!</strong></p>
            @endif
        </div>
    </body>

@endsection