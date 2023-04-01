@extends('layouts.form')

@section('title', 'Create Book')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('book.store')) 

{{-- margin guidelines:

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "22%")

@section('fields')
    {{-- para usar el método put --}}
    {{-- @method('PUT') --}}


    {{-- errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <script type="text/javascript">
        function readImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
            
                reader.onload = function (e) {
                let dst = $('.img_editable');
                // console.log("dst: " + dst.length);
                for (let i = 0; i < dst.length; i++) {
                    if ($(dst[i]).attr('id') == "img_edit") {
                        // console.log("IMG: " + $(dst[i]) + " id: " + $(dst[i]).attr('id'));
                        $(dst[i]).attr('src', e.target.result);
                        break;
                    }
                }
                // .attr('src', e.target.result);
                };
            
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <div class="form-group custom-row">  
        <div class="custom-col">
            <label for="name" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
        </div>                      
    </div>

    <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description" rows="6" cols="6">{{ old('description') }}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="ejemplo" class="col-sm-2 col-form-label">Autor/a</label>
        <div class="col-sm-10">
            <select class="form-control" name="author" id="author">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}" >{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="ejemplo" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <select class="form-control" name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" >{{ $category->tag }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-md-3">
            <label for="image">Imagen:</label>
            <img id="img_edit" class="img_editable" src="" alt="Author Image" width="100px" height="100px">
            <input onchange="readImage(this)" type="file" name="image" id="image" class="form-control"
                accept="image/*">
        </div>
    </div>



    <div class="form-group row">
        <label for="input_file" class="col-sm-2 col-form-label">Input File:</label>
        <div class="col-sm-10">
            <input type="file" name="input_file" id="input_file" value="{{ old('input_file') }}" accept="input_file/pdf">
        </div>
    </div>
                
@endsection