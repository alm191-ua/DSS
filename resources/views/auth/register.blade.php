@extends('layouts.form')

@section('title', 'Register')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('register'))

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "30%")


@section('fields')
    {{-- para usar el método put --}}
    {{-- @method('PUT') --}}
    <style>
        .invalid {
            border: 1px solid red;
        }
        .fa {
            position:absolute;
            bottom:10px;
            right:25px;
            cursor:pointer;
        }
        #progress-bar {
            width: 100%;
            vertical-align: middle;
        }
    </style>

    <div class="form-group custom-row">  
        <div class="custom-col">
                <label for="username" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control @error('username') 
                    is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" 
                    autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        
        <div class="custom-col">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
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
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="new-password">
            <i class="fa fa-eye-slash" id="togglePassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()"></i>
        </div>
        <div class="col-sm-10">
            <progress id="progress-bar" value="0" max="100"></progress>
        </div> 
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror       
    </div>
    <div class="form-group row">
        <label for="password_confirmation" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
        <div class="col-sm-10">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required autocomplete="new-password">
            <i class="fa fa-eye-slash" id="toggleConfirmPassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()" ></i>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2">I agree <a target="_blank" href="{{ route('terms') }}">terms &amp; conditions</a></label>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let password = document.getElementById('password');
        let password2 = document.getElementById('password_confirmation');

        password.addEventListener('keyup', function() {
            // comprobar que las contraseñas coinciden
            if (password.value == password2.value) {
                password2.classList.remove('invalid');
                password2.classList.add('valid');
            } else {
                password2.classList.remove('valid');
                password2.classList.add('invalid');
            }

            // comprobar la fuerza de la contraseña
            console.log(checkStrengthPassword(password.value));

        });

        password2.addEventListener('change', function() {
            // comprobar que las contraseñas coinciden
            if (password.value == password2.value) {
                password2.classList.remove('invalid');
                password2.classList.add('valid');
            } else {
                password2.classList.remove('valid');
                password2.classList.add('invalid');
            }
        });

        function checkStrengthPassword(password) {
            let strength = 0;
            if (password.length < 8) {
                $('#progress-bar').val(0);
                return 'Too short';
            }
            if (password.match(/([0-9])/)) {
                strength += 1;
            }
            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                strength += 1;
            }
            // If password contains lower, increase strength value.
            if (password.match(/([a-z])/)) {
                strength += 1;     
            }
            // If password contains upper, increase strength value.
            if (password.match(/([A-Z])/)) {
                strength += 1;
            }

            if (strength == 0) {
                $('#progress-bar').val(0);
                return 'Too weak';
            } else if (strength == 1) {
                $('#progress-bar').val(25);
                return 'Weak';
            } else if (strength == 2) {
                $('#progress-bar').val(50);
                return 'Good';
            } else if (strength == 3) {
                $('#progress-bar').val(75);
                return 'Strong';
            } else {
                $('#progress-bar').val(100);
                return 'Very strong';
            }
        }

        function seePassword() {
            document.getElementById("togglePassword").className = "fa fa-eye";
            document.getElementById("toggleConfirmPassword").className = "fa fa-eye";
            $('#password').attr('type', 'text');
            $('#password_confirmation').attr('type', 'text');

        }
        function hidePassword() {
            document.getElementById("togglePassword").className = "fa fa-eye-slash";
            document.getElementById("toggleConfirmPassword").className = "fa fa-eye-slash";
            $('#password').attr('type', 'password');
            $('#password_confirmation').attr('type', 'password');
        }

        // check if gridCheck2 is checked
        document.getElementById('gridCheck2').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('submit').disabled = false;            
            } else {
                document.getElementById('submit').disabled = true;
            }
        });
    </script>

@endsection



