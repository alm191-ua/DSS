<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('icon.ico') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Word Waves - @yield('title')</title>
        <!-- CUSTOM STYLE -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- THEME TYPO -->
        <link rel="stylesheet" href="{{ asset('css/themetypo.css') }}">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- COLOR FILE -->
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- BX SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
        <!-- BX SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.css') }}">
        <!-- BX SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/widget.css') }}">
        <!-- BX SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/shortcode.css') }}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- Component -->
        <link rel="stylesheet" href="{{ asset('js/dl-menu/component.css') }}">
        <!-- JQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <link rel="stylesheet" href="{{ asset('css/firstrow.css') }}">

        {{-- for ads --}}
        <script src="{{ asset('vendor/smart-ads/js/smart-banner.min.js') }}"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <!--WRAPPER START-->
        <div class="wrapper kode-home-page">
            <!--HEADER START-->
            <header>
                <div class="top-strip">
                    <div class="container">
                        <div class="kode-navigation" style="height: 35px;"> <!-- site-info -->
                            <ul>
                                <li style="top:9px;"><a id="mail-link" href="mailto:contact.wordwaves@gmail.com"><i id="mail-icon" class="fa fa-envelope-o"></i>contact.wordwaves@gmail.com</a></li>
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                <li style="top:0.5em;" id="lang-icon"><a href="#"><i class="fa fa-globe"></i></a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('locale', ['locale' => 'es']) }}">
                                                <img src="{{ asset('images/flags/es_flag.png') }}" alt="Spain flag" width="25" height="12">
                                                <div style="display: inline-flex">Español</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('locale', ['locale' => 'en']) }}">
                                                <img src="{{ asset('images/flags/en_flag.png') }}" alt="UK flag" width="25" height="12">
                                                <div style="display: inline-flex">English</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{--<!-- <li><a id="search-box" href="#"><i class="fa fa-search"></i></a></li> -->
                                
                                <!-- <li><a href="{{ route('login.perform') }}"><i class="fa fa-user"></i></a>
                                    <ul>
                                        <li><a href="{{ route('login.perform') }}">{{ __('master.menu.login') }}</a></li>
                                        <li><a href="{{ route('register.perform') }}">{{ __('master.menu.register') }}</a></li>
                                    </ul>
                                </li> -->--}}
                                @auth
                                    {{-- {{auth()->user()->name}} --}}
                                    {{-- <div class="text-end" style="display: inline-flex"> --}}
                                    <li>
                                        <a title="{{auth()->user()->username}}" id="profile-link" href="{{ route('profile') }}"><i class="fa fa-user" style="margin-right: 15px; position:relative; top:9px;"></i></a>                 
                                    </li>
                                    <li>    
                                        <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">{{ __('Logout') }}</a>
                                    </li>
                                        {{-- </div> --}}
                                @endauth

                                @guest
                                    {{-- <div class="text-end" style="display: inline-flex"> --}}
                                    <li style="margin-right: -20px">
                                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2" style="margin-right: 0.5em;">{{ __('master.menu.login') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" class="btn btn-warning">{{ __('Sign-up') }}</a>
                                    </li>
                                        {{-- </div> --}}
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Search Overlay Box Starts -->
                <div id="kode_search_box" class="kode_search_box">
                    <form class="kode_search_box-form">
                        <input class="kode_search_box-input" type="search" placeholder="Search..."/>
                        <button class="kode_search_box-submit" type="submit">Search</button>
                    </form>
                    <span class="kode_search_box-close"></span>
                </div><!-- /kode_search_box -->			
                <div class="overlay"></div>
                <div class="logo-container">
                    <div class="container">
                        <!--LOGO START-->
                        <div class="logo" style="margin: -1.6em;">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                        <!--LOGO END-->
                        <div class="kode-navigation">
                            <ul>
                                @auth
                                    @if (Auth::user()->is_admin)
                                        <li><a href="{{ route('admin') }}">Admin</a></li>
                                    @endif
                                @endauth
                                <li><a href="{{ route('home') }}">{{ __('master.menu.home') }}</a></li>
                                <li><a href="{{ route('aboutus') }}">{{ __('master.menu.aboutus') }}</a></li>
                                <li class="last"><a href="{{ route('authors') }}">{{ __('master.menu.authors') }}</a>
                                </li>
                                <li><a href="{{ route('books-list') }}">{{ __('master.menu.books') }}</a>
                                </li>
                                <li class="last"><a href="{{ route('contactus') }}">{{ __('master.menu.contactus') }}</a></li>
                            </ul>
                        </div>
                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">{{ __('master.menu.open') }}</button>
                            <ul class="dl-menu">
                                @auth
                                    @if (Auth::user()->is_admin)
                                        <li><a href="{{ route('admin') }}">Admin</a></li>
                                    @endif
                                @endauth
                                <li><a href="{{ route('home') }}">{{ __('master.menu.home') }}</a></li>
                                <li><a href="{{ route('aboutus') }}">{{ __('master.menu.aboutus') }}</a></li>
                                <li class="last"><a href="{{ route('authors') }}">{{ __('master.menu.authors') }}</a>
                                </li>
                                <li><a href="{{ route('books-list') }}">{{ __('master.menu.books') }}</a>
                                </li>
                                <li class="last"><a href="{{ route('contactus') }}">{{ __('master.menu.contactus') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--HEADER END-->

            @yield('content')

            @yield('footer')
            
            <div class="copyrights">
                <div class="container">
                    <p>{{ __('master.copy') }}</p>
                    <!-- <div class="cards"><img src="images/cards.png" alt=""></div> -->
                </div>
            </div>
        </div>
        <!--WRAPPER END-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- "{{ asset('css/styles.css') }}" -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-slider.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script> 
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> 
        <script src="{{ asset('js/dl-menu/modernizr.custom.js') }}"></script> 
        <script src="{{ asset('js/dl-menu/jquery.dlmenu.js') }}"></script> 
        <script src="{{ asset('js/classie.js') }}"></script> 
        <script src="{{ asset('js/functions.js') }}"></script> 
    </body>
</html>

<script type="text/javascript">
    // remove list on not focus
    $(document).on('click', function (e) {
        if ($(e.target).closest("#search-list").length === 0) {
            $("#search-list").empty();
        }
    });

    $('.search-books').on('keyup', function (e) {
        if($(this).val().length > 0)
        {
            $value = $(this).val();
            if (e.key === 'Enter' || e.keyCode === 13) {
                window.location.href = '/books?search=' + $value;
            }

            $.get("{{route('search')}}", {'search': $value}, function (data) {
                $('#search-list').html(data);
            });

            return;
        }
        else
        {
            $('#search-list').empty();
        }
    });

    $('.search-books-category').on('keyup', function (e) {
        if($(this).val().length > 0)
        {
            $value = $(this).val();
            if (e.key === 'Enter' || e.keyCode === 13) {
                window.location.href = '/books?search=' + $value + '&category=' + $('#category_search').val();
            }

            $.get("{{route('search-category')}}", {'search': $value, 'category': $('#category_search').val()}, function (data) {
                $('#search-list').html(data);
            });

            return;
        }
        else
        {
            $('#search-list').empty();
        }
    });
</script>