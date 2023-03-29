@extends('layouts.form')

@section('title', 'Edit')

@section('margin', "30%")


@section('fields')
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
                    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
                </div>
            </div>
        
        <div class="custom-col">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Choose Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            <i class="fa fa-eye-slash" id="togglePassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()"></i>
        </div>
        <div class="col-sm-10">
            <progress id="progress-bar" value="0" max="100"></progress>
        </div>        
    </div>
    <div class="form-group row">
        <label for="password-2" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" name="password-2" id="password-2" class="form-control" value="{{ old('password-2') }}" required>
            <i class="fa fa-eye-slash" id="toggleConfirmPassword" onmousedown="seePassword()" onmouseup="hidePassword()" onmouseout="hidePassword()" ></i>
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