@extends('layouts.form')

@section('title', 'Login')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('login.perform'))

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "30%")


@section('fields')
    {{-- para usar el método put --}}
    {{-- @method('PUT') --}}
    <style>
        .fa {
            position:absolute;
            bottom:10px;
            right:25px;
            cursor:pointer;
        }
        .form-check {
            display: none;
        }
    </style>


    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input autofocus type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
        </div>    
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
            <i class="fa fa-eye-slash" id="togglePassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()"></i>
        </div>    
    </div>


    <script type="text/javascript">
        function seePassword() {
            document.getElementById("togglePassword").className = "fa fa-eye";
            $('#password').attr('type', 'text');

        }
        function hidePassword() {
            document.getElementById("togglePassword").className = "fa fa-eye-slash";
            $('#password').attr('type', 'password');
        }
        document.addEventListener("DOMContentLoaded", function(event) { 
            document.getElementById('submit').disabled = false;
        });        
    </script>
                
@endsection