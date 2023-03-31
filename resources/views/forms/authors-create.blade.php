@extends('layouts.form')

@section('title', 'Example Form')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('author.store')) 

{{-- margin guidelines:

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "30%")

@section('fields')
    {{-- para usar el método put --}}
    {{-- @method('PUT') --}}

    <div class="row">
        <div class="col-md-3">
            <label for="image">Imagen:</label>
            {{--<img src="{{ $author->image }}" alt="Author Image" onerror="this.src=""">--}}
        </div>
        <div class="col-md-9">
            <label for="name">Nombre:</label>
            <h2>{{ $author->name }}</h2>
            <div class="form-group">
                <label for="info">Información:</label>
                <textarea class="form-control" id="info" name="info" rows="6">{{ $author->info }}</textarea>
            </div>
        </div>
    </div>
                
@endsection