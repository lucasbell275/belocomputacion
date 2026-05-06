@extends('layouts.app')
@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        /* body{
            background-color: #252836;
           
            
        } */
    </style>
    
@endpush
@section('content')
    <body class="bg-[#252836] flex flex-col min-h-screen">
        <div class="container mx-auto py-45 text-[#008DD5] flex flex-col items-start gap-3 flex-grow">
            <div class="inline-block">
                <h1 class="font-['Bebas_Neue'] text-[100px] leading-tight tracking-[0.04em]">belocomputacion</h1>
                <span class="block h-1 bg-[#008DD5] -mt-5"></span>
            </div>
            <p class=" text-xl font-semibold text-gray-300">La computadora de tus sueños, a un solo click.</p>
        </div> 
    </body>

@endsection
