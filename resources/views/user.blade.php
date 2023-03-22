@extends('layouts.form')

@section('title', 'Login')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('terms')) 

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
            <label for="name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
        </div>
        <div class="custom-col">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
            </div>
        </div>
    </div>
    <div class="form-group custom-row">  
        <div class="custom-col">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                </div>
            </div>
        
        <div class="custom-col">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Choose Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
            <i class="fa fa-eye-slash" id="togglePassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()"></i>
        </div>
        <div class="col-sm-10">
            <progress id="progress-bar" value="0" max="100"></progress>
        </div>        
    </div>
    <div class="form-group row">
        <label for="password-2" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" name="password-2" id="password-2" class="form-control" value="{{ old('password-2') }}">
            <i class="fa fa-eye-slash" id="toggleConfirmPassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()" ></i>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="address" id="address" rows="3" cols="3">{{ old('address') }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="ejemplo" class="col-sm-2 col-form-label">Ejemplo</label>
        <div class="col-sm-10">
            <select class="form-control" name="ejemplo" id="ejemplo">
                <option selected>Default select 1</option>
                <option>Default select 2</option>
                <option>Default select 3</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="input_file" class="col-sm-2 col-form-label">Input File:</label>
        <div class="col-sm-10">
            <input type="file" name="input_file" id="input_file" value="{{ old('input_file') }}">
        </div>
    </div>

    <div class="form-group row" 
    style="flex-wrap: nowrap; display: inline-flex;">
        <label for="customSwitch1" class="col-sm-2 col-form-label">Toggle</label>
        <div class="col-sm-10" style="padding: 0%; align-self: flex-end;">
            <label class="switch">
                <input type="checkbox" class="custom-control-input" name="customSwitch1" id="customSwitch1">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <script type="text/javascript">
        let password = document.getElementById('password');
        let password2 = document.getElementById('password-2');

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
            if (password.length < 6) {
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
            $('#password-2').attr('type', 'text');

        }
        function hidePassword() {
            document.getElementById("togglePassword").className = "fa fa-eye-slash";
            document.getElementById("toggleConfirmPassword").className = "fa fa-eye-slash";
            $('#password').attr('type', 'password');
            $('#password-2').attr('type', 'password');
        }
    </script>
                
@endsection