@extends('layouts.form')

@section('title', 'Create Author')

@section('form-action', route('author.store')) 

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "30%")

@section('fields')

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
                    for (let i = 0; i < dst.length; i++) {
                        if ($(dst[i]).attr('id') == "img_edit") {
                            $(dst[i]).attr('src', e.target.result);
                            break;
                        }
                    }
                };
            
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <div class="row">
        <div class="col-md-3">
            <label for="image">Imagen:</label>
            <img id="img_edit" class="img_editable" src="" alt="Author Image" width="100px" height="100px">
            <input name="image" type="file" onchange="readImage(this)" id="image" 
                    accept="image/*">
        </div>
        <div class="col-md-9">
            <label for="name">Nombre:</label>
            <input type="text" placeholder="nombre del autor" name="name" id="name" class="form-control" value="{{ old('name') }}">
            <div class="form-group">
                <label for="info">Información:</label>
                <textarea class="form-control" id="info" name="info" rows="6">{{ old('info') }}</textarea>
            </div>
        </div>
    </div>
                
@endsection