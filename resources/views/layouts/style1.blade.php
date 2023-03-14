@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('content')
<!--BANNER START-->
<div class="kode-inner-banner" style="background-image: url('/images/inner-banner.png')"> {{-- <img src="{{ asset('images/inner-banner.png') }}" alt=""> --}}
    <div class="kode-page-heading">
        <h2>@yield('title')</h2>
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          {{-- <li><a href="#">Books Guide</a></li> --}}
          <li class="active">@yield('title')</li>
        </ol>
    </div>
    <div class="container">
        <div class="banner-search">
            <div class="row">
                <div class="col-md-2">
                    <h2>Search<br> Your Books</h2>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Enter Your Title">
                </div>
                <div class="col-md-2">
                    <select></select>
                </div>
                <div class="col-md-2">
                    <button>Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--BANNER END-->

@yield('style1.content')

@endsection