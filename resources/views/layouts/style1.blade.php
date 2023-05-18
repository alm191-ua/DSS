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
                        <h2>{{__('style1.search_title_1')}}<br> {{__('style1.search_title_2')}}</h2>
                    </div>
                    <div class="col-md-6">
                        <input id="title_search" class="search-books-category" 
                            {{-- onchange="window.location.href = '/books?search=' + this.value" --}}
                            type="text" placeholder="{{__('style1.search_bar')}}">
                        <ul class="list-group" id="search-list" style="display: block; position: absolute; 
                            background-color: white; z-index: 20; max-height:200px; overflow:auto;
                            width:95%; transform:translateX(-20px);
                            ">
                        </ul>
                    </div>
                    <div class="col-md-2">
                        {{-- select with categories --}}
                        <select id="category_search" 
                            {{-- onchange="window.location.href = '/books?category=' + this.value" --}}
                            >
                            <option value="" disabled selected>{{__('style1.select_category')}}</option>
                            <option value="">{{__('style1.all_categories')}}</option>
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
                            >{{__('style1.search_button')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    {{-- @yield('content') --}}

@endsection