@extends('layouts.app')

@section('title')
    @yield('title')
@endsection

@section('content')

<style>
    .row {
        display: -ms-flexbox;
        display: flex;
        float: none;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        padding: 0 15px;
    }

    textarea {
        resize: vertical; 
        min-height: 35px;
    }

    .custom-col {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        margin-right: -15px;
        margin-left: -15px;
        padding: 0 15px;
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    div {
        display: block;
    }
    body {
        font-family: 'Open Sans', sans-serif;
        font-family: 'Roboto', sans-serif;
        /* background-color: #221d1d; */
        /* letter-spacing: .1px; */
        /* font-size: 14px; */
        overflow-x: hidden;
        color: #ffffff;
        /* background: linear-gradient(to right, #000000, #ffffff); */
    }
    body {
        margin: 0;
        margin-top: 15%;
        /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5; */
        color: #212529;
        text-align: left;
        background-color: #fff;
        background-image: url('/images/cool-bg3.png');
    }
    :root {
        --blue: #673ab7;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #f02769;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #32ab13;
        --teal: #20c997;
        --cyan: #198fed;
        --white: #fff;
        --gray: #5a7684;
        --gray-dark: #343a40;
        --primary: #673ab7;
        --secondary: #5a7684;
        --success: #32ab13;
        --info: #198fed;
        --warning: #ffc107;
        --danger: #f02769;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }
    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    ::selection {
        color: #fff;
        background: rgba(44, 20, 20, 0.2);
    }

    .ml-auto, .mx-auto {
        margin-left: auto !important;
    }
    .mr-auto, .mx-auto {
        margin-right: auto !important;
    }
    .col-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .custom-row {
        display: flex;
    }

    .custom-row .custom-col { 
        display: inline-block;
        float: left;
        font-size: inherit;
        line-height: 1.5;
        width: 100%;
    }

    .radius-15 {
        border-radius: 15px;
    }
    .card {
        box-shadow: 0 0.1rem 0.7rem rgb(0 0 0 / 18%);
        border: 1px solid rgba(0, 0, 0, 0);
        margin-bottom: 30px;
        background-color: rgb(0 0 0 / 0.24);
        margin-left: @yield('margin', "22%");
        margin-right: @yield('margin', "22%");
    }
    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 1.5rem;
    }

    /* .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }
    .card-title {
        margin-bottom: 0.75rem;
    } */

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        margin-bottom: 0.75rem;
    }

    .mb-0, .my-0 {
        margin-bottom: 0 !important;
        color: black;
        font-size: 30px;
    }
    h4, .h4 {
        font-size: 1.5rem;
    }
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        color: #fff;
    }
    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    user agent stylesheet
    h4 {
        display: block;
        margin-block-start: 1.33em;
        margin-block-end: 1.33em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    /* check box style */
    input[type="checkbox"] {
        width: 15px;
        height: 15px;
        border-radius: 3px;
    }

    /* switch slider button */
    .switch {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 17px;
    }

    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 13px;
        width: 13px;
        left: 2px;
        bottom: 2px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(13px);
        -ms-transform: translateX(13px);
        transform: translateX(13px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 17px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

</style>


<div class="row">
    <div class="col-12 col-lg-9 mx-auto">
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">@yield('title')</h4>
                </div>
                <hr>
                <div class="form-body">
                    <form action=@yield('form-action') method="POST">
                        @csrf
                        @yield('fields')

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
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection