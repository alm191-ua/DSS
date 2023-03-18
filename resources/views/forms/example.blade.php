@extends('layouts.form')

@section('title', 'Create Book')

@section('fields')

    
    {{-- <h1>Create Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="published_at">Published At</label>
            <input type="date" name="published_at" id="published_at" class="form-control" value="{{ old('published_at') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form> --}}

    <div class="form-group row">                        
        <label class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone No.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Choose Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" cols="3"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Ejemplo</label>
        <div class="col-sm-10">
            <select class="form-control">
                <option>Default select 1</option>
                <option>Default select 2</option>
                <option>Default select 3</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label>Input File:</label>
        <input type="file">
    </div>

    <label for="customSwitch1">Toggle</label>
    <label class="switch">
        <input type="checkbox" class="custom-control-input" id="customSwitch1">
        <span class="slider round"></span>
    </label>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2">I agree <a target="_blank" href="{{ route('terms') }}">terms &amp; conditions</a></label>
            </div>
        </div>
    </div>
    

    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="button" class="btn btn-light px-4">Confirm</button>
        </div>
    </div>
                
@endsection