@extends('layouts.app')

@section('content')
    <main>
        @foreach ($intento as $intento)
            <p>{{$intento -> nombre}}</p>
        @endforeach
    </main>
@endsection