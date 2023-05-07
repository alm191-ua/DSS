@extends('layouts.form')

@section('title', 'Login')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('login'))

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
        <label for="username" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
            <div class="col-sm-10">                
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> 
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">{{ __('Password') }}</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="current-password">
            <i class="fa fa-eye-slash" id="togglePassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()"></i>
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
    </div>

    <div class="form-group row">        
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            {{--<button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>--}}

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
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

    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
                
@endsection