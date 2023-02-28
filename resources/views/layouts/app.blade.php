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
            	<div class="site-info">
                    <ul>
                        <li><a href="mailto:Info@bookguide.com"><i class="fa fa-envelope-o"></i>Info@bookguide.com</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <a href="#"><img src="images/logo.png" alt=""></a>
                </div>
                <!--LOGO END-->
                <div class="kode-navigation">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="blog.html">Our Blog</a>
                            <ul>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-full.html">Blog Full</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="last"><a href="authors.html">Teams</a>
							<ul>
								<li><a href="authors.html">Author</a></li>
								<li><a href="author-detail.html">Author Detail</a></li>								
                            </ul>
						</li>
						<li><a href="book-listing.html">Products</a>
                            <ul>
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

    <!--NEWSLETTER START-->
    <section class="kode-newsletters">
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-content white">
                <h2>Subscribe to our Newsletter for the latest news.</h2>
                <p>Update your-self right now! By filling the form below, the lastest information about a thousand books will be sent directly to your email weekly.</p>
            </div>
            <!--SECTION CONTENT END-->
            <div class="input-container">
                <input type="text" placeholder="Subscribe us">
                <button>Subcribe</button>
            </div>
        </div>
    </section>
    <!--NEWSLETTER END-->

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
                        	<li><i class="fa fa-tags"></i><p>Carr. de San Vicente del Raspeig, s/n, 03690 San Vicente del Raspeig, Alicante</p></li>
                            <li><i class="fa fa-phone"></i><p>(+34) 555 555 555</p></li>
                            <li><i class="fa fa-envelope-o"></i><p><a href="mailto:word_waves@gmail.com">word_waves@gmail.com</a></p></li>
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
                <!--CATEGORY WIDGET START-->
                <div class="col-md-3">
                	<div class="widget widget-categories">
                    	<h2>Information</h2>
                        <ul>
                        	<li><a href="#">Specials</a></li> 
                            <li><a href="#">New products</a></li> 
                            <li><a href="#">Best sellers</a></li> 
                            <li><a href="#">Contact us</a></li> 
                            <li><a href="#">Terms of use</a></li> 
                            <li><a href="#">Sitemap</a></li>  
                        </ul>
                    </div>
                </div>
                <!--CATEGORY WIDGET END-->
                <!--NEWSLETTER START-->
                <div class="col-md-3">
                	<div class="widget widget-newletter">
                    	<h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <input type="text" placeholder="E-mail ID">
                        <button>Subscribe</button>
                    </div>
                </div>
                <!--NEWSLETTER START END-->
            </div>
        </div>
    </footer>
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