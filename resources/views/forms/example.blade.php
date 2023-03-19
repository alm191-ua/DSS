@extends('layouts.form')

@section('title', 'Create Book')

{{-- aqui iría la ruta de la acción del formulario --}}
{{-- es la ruta post definida en web.php y que se ejecuta en el controlador --}}
{{-- por ejemplo: route('books.store') --}}
{{-- tiene que ser una ruta post, esta de ejemplo es get, por lo que no hace nada --}}
@section('form-action', route('terms')) 

{{-- margin guidelines:
22% -> para formularios grandes (default)
30% -> para formularios pequeños, como el de login --}}
@section('margin', "22%")


@section('fields')

    <div class="form-group custom-row">  
        <div class="custom-col">
            <label for="name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
        </div>                      
        <div class="custom-col">
            <label for="phone" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-10">
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>
        </div>
    </div>
    
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-10">
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Choose Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="password-2" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" name="password-2" id="password-2" class="form-control" value="{{ old('password-2') }}">
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
                
@endsection