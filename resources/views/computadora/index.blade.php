@foreach ($computadoras as $computadora)
    <div class="computadora">
        <h2>{{ $computadora->nombre }}</h2>
        <p>Stock: {{ $computadora->stock }}</p>
        <p>Precio: ${{ $computadora->precio }}</p>
        @if ($computadora->oferta)
            <p><strong>¡En oferta!</strong></p>
        @endif
    </div>
    
@endforeach