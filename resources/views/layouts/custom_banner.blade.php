@extends('layouts.app')

@section('content')

<style>
    .kode-page-heading>h3 {
        color: #fff;
    }
</style>

    <!--BANNER START-->
    <div class="kode-inner-banner" style="background-image: url('/images/inner-banner.png');
        max-height: 300px; min-height: 300px;
    "> {{-- <img src="{{ asset('images/inner-banner.png') }}" alt=""> --}}
        <div class="kode-page-heading" style="margin-top:150px">
            <h2>@yield('title')</h2>
            <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">{{ __('master.menu.home') }}</a></li>
            <li class="active">@yield('title')</li>
            </ol>
            <h3>{{__('profile.welcome_1')}} [{{ Auth::user()->username ?? 'Guest' }}], {{__('profile.welcome_2')}}</h3>
        </div>
    </div>
    <!--BANNER END-->

    @section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <!--TEXT WIDGET START-->
                <div class="col-md-3">
                    <div class="widget widget-text">
                        <h2>About Us</h2>
                        <p>
                        {{ __('master.about_us') }}
                        </p>
                        <ul>
                            <li><i class="fa fa-tags"></i><p> {{ __('master.localization') }} </p></li>
                            <li><i class="fa fa-phone"></i><p>(+34) 555 555 555</p></li>
                            <li><i class="fa fa-envelope-o"></i><p><a href="mailto:contact.wordwaves@gmail.com">contact.wordwaves@gmail.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <!--TEXT WIDGET END-->
                <!--TWITTER WIDGET START-->
                <div class="col-md-3">
                    <div class="widget widget-twitter">
                        <h2>Latest Tweets</h2>
                        <ul>
                            <li>
                                <p>There are some amazing submissions in the latest<a href="#"> @tutsplus ‘Created by you ’challenge http://t.co/duajgjahuz 16 hour ago</a></p>
                            </li>
                            <li>
                                <p>There are some amazing submissions in the latest<a href="#"> @tutsplus ‘Created by you ’challenge http://t.co/duajgjahuz 16 hour ago</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--TWITTER WIDGET END-->                
            </div>
        </div>
    </footer>

@endsection