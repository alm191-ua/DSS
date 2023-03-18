<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                <li><a href="mailto:contact.wordwaves@gmail.com"><i class="fa fa-envelope-o"></i>contact.wordwaves@gmail.com</a></li>
                                <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-language"></i></a>
                                    <ul>
                                        <li><a href="{{ route('locale', ['locale' => 'es']) }}">
                                        <img src="{{ asset('images/flags/es_flag.png') }}" alt="Spain flag" width="25" height="12">
                                        </a></li>
                                        <li><a href="{{ route('locale', ['locale' => 'en']) }}">
                                        <img src="{{ asset('images/flags/en_flag.png') }}" alt="UK flag" width="25" height="12">
                                        </a></li>
                                    </ul>
                                </li>
                                <li><a id="search-box" href="#"><i class="fa fa-search"></i></a></li>
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
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                        <!--LOGO END-->
                        <div class="kode-navigation">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li class="last"><a href="{{ route('authors') }}">Teams</a>
                                    <ul>
                                        <li><a href="{{ route('authors') }}">Authors</a></li>
                                        <li><a href="{{ route('author') }}">Author Detail</a></li>								
                                    </ul>
                                </li>
                                <li><a href="book-listing.html">Products</a>
                                    <ul>
                                        <li><a href="{{ route('books-list') }}">Books List</a></li>							
                                        <li><a href="{{ route('book', ['id' => 3]) }}">Book Detail</a></li> {{-- only for testing --}}
                                    </ul>
                                </li>
                                <li class="last"><a href="{{ route('contactus') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div id="kode-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="menu-item kode-parent-menu"><a href="blog.html">Our Blog</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-full.html">Blog Full</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu last"><a href="authors.html">Teams</a>
                                    <ul class="dl-submenu">
                                        <li><a href="authors.html">Author</a></li>
                                        <li><a href="author-detail.html">Author Detail</a></li>								
                                    </ul>
                                </li>
                                <li class="menu-item kode-parent-menu last"><a href="book-listing.html">Products</a>
                                    <ul class="dl-submenu">
                                        <li><a href="book-listing.html">Products Style 1</a></li>
                                        <li><a href="book-listing-1.html">Products Style 2</a></li>
                                        <li><a href="book-listing-2.html">Products Style 3</a></li>
                                        <li><a href="book-listing-1-w-sidebar.html">Product 2 W/S</a></li>
                                        <li><a href="book-listing-2-w-sidebar.html">Product 3 W/S</a></li>								
                                        <li><a href="book-detail.html">Product Detail</a></li>
                                    </ul>
                                </li>
                                <li class="last"><a href="contact-us.html">Contact Us</a></li>
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
                    <p>Copyrights © 2022-23 WordWaves. All rights reserved</p>
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