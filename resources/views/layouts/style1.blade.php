@extends('layouts.base')

{{-- @section('title')
    @yield('title')
@endsection --}}

@section('content')
    {{-- @parent --}}

    <!--BANNER START-->
    <div class="kode-inner-banner" style="background-image: url('/images/inner-banner.png')"> {{-- <img src="{{ asset('images/inner-banner.png') }}" alt=""> --}}
        <div class="kode-page-heading">
            <h2>@yield('title')</h2>
            <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('master.menu.home') }}</a></li>
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
                        <input id="title_search" 
                            {{-- onchange="window.location.href = '/books?search=' + this.value" --}}
                            type="text" placeholder="Enter Your Title">
                    </div>
                    <div class="col-md-2">
                        {{-- select with categories --}}
                        <select id="category_search" 
                            {{-- onchange="window.location.href = '/books?category=' + this.value" --}}
                            >
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->tag }}">{{ $category->tag }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button onclick="
                            let title = $('#title_search').val();
                            let category = $('#category_search').val();
                            window.location.href = '/books?search=' + title + '&category=' + category;
                            "
                            >Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    {{-- @yield('content') --}}

@endsection