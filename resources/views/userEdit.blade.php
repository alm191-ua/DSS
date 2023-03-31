@extends('layouts.form')

@section('title', 'Edit')

@section('margin', "30%")

@section('fields')

@section('form-action', route('user-edit', $user->id))

@method('PUT')
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

    <div class="form-group custom-row">  
        <div class="custom-col">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}" required>
                </div>
            </div>
        
        <div class="custom-col">
            <label for="email" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Actual Password</label>
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