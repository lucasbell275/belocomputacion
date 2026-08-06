@extends('layouts.app')

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#descripcion',
        plugins: 'lists link',
        toolbar: 'bold italic underline | bullist numlist | link',
    });
</script>
@endpush


@section('content')
    <form action="{{route('admin.nosotros.update', $nosotros->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="text-white flex flex-col px-6 py-6 gap-4 md:flex md:flex-row md:gap-6 md:py-10 md:px-6">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" value="{{$nosotros->titulo}}" class="bg-gray-700 text-white max-h-20 text-center rounded-md">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" >{{$nosotros->descripcion}}</textarea>

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="bg-gray-700 text-white max-h-20 text-center rounded-md px-4 py-4">

            <button type="submit" class="text-white bg-gray-700 px-2 py-4 hover:bg-gray-500 rounded-xl md:max-w-30">Actualizar vista 'nosotros' -></button>
        </div>

    </form>
@endsection