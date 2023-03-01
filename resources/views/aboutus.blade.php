<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Store - Book Guide Author, Publication and Store</title>
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
<div class="wrapper">
	<!--HEADER START-->
	<header>
    	<div class="top-strip">
        	<div class="container">
            	<div class="site-info">
                    <ul>
                        <li><a href="mailto:Info@bookguide.com"><i class="fa fa-envelope-o"></i>Info@bookguide.com</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        
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
    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>About Us</h2>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Books Guide</a></li>
              <li class="active">About Us</li>
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
    <!--CONTENT START-->
    <div class="kode-content">
    	<!--BOOK GUIDE SECTION START-->
        <section>
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content margin-bottom-zero">
                	<h2>WELCOME TO BOOK GUIDE</h2>
                </div>
                <!--SECTION CONTENT END-->
                <div class="book-guide">
                	<div class="row">
                    	<div class="col-md-5">
                        	<img src="images/about-img2.png" alt="">
                        </div>
                        <div class="col-md-7">
                        	<p class="cap">PLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="row">
                            	<div class="col-md-6">
                                	<ul class="kd-list2">
                                        <li><p>Consectetur adipiscing elit</p></li>
                                        <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                                        <li><p>Labore et dolore magna aliqua</p></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                	<ul class="kd-list2">
                                        <li><p>Consectetur adipiscing elit</p></li>
                                        <li><p>Sed do eiusmod tempor incididunt ut labore</p></li>
                                        <li><p>Labore et dolore magna aliqua</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <section class="kode-service-section">
        	<div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-gift"></i>
                            <h3><a href="#"> Free Gift Wrap</a></h3>
                            <p>Free gift wrapping on all purchases. Wrapping includes a blue box with your choice with Ribbon.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-book"></i>
                            <h3><a href="#">Buy Selling Used Books</a></h3>
                             <p>We provide you the best selling of the used books. You can sell them to us if you have read them once.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-truck"></i>
                            <h3><a href="#">Free Shipping</a></h3>
                           <p>We provide free shipping over the $1000 purchase from one country to another with extra discount.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-service-2">
                        	<i class="fa fa-calculator"></i>
                            <h3><a href="#">Returns &amp; Exchange</a></h3>
                           <p>Return and Exchange is possible in 5 days. In case of lost or damage Return & Exchange is not possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TABS SECTION START-->
        <div class="tab-head-section-top">
            <div class="container">
                <div class="kd-tab-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Sed ut Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Sed ut Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab">Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab10" aria-controls="tab10" role="tab" data-toggle="tab">Sed Perspiciatis Unde omnis</a></li>
                        <li role="presentation"><a href="#tab11" aria-controls="tab11" role="tab" data-toggle="tab">Ledut Perspiciatis Unde omnis</a></li>
                    </ul>
                
                <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        	<div class="kode-thumb">
                            	<ul class="bxslider">
                                	<li><img src="images/tabs-img4.png" alt=""></li>
                                    <li><img src="images/tabs-img3.png" alt=""></li>
                                    <li><img src="images/tabs-img5.png" alt=""></li>
                                </ul>
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonum.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et acclor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voto duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab5">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et  et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab6">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam numy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab7">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab8">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.t Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab9">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctrmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab10">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volupest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab11">
                        	<div class="kode-thumb">
                            	<img src="images/tabs-img3.png" alt="">
                            </div>
                            <div class="kode-text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TABS SECTION END-->
        <!--VIDEO SECTION START-->
        <section class="kode-video-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode-video">
                            <a href="#">
                        	   <img src="images/video-bg2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kode-text">
                        	<h2> Authors, Publications Brief detail Video</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor.</p>
                            <a href="#" class="more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--VIDEO SECTION END-->
        <!--COUNT UP SECTION START-->
        <div class="count-up-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">3578</span>
                            <p>Books To Read</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">589</span>
                            <p>Online Users</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">1250</span>
                            <p>Best Authors</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">57</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--ABOUT INFO SECTION START-->
        <section>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode-profile-tabs">
                    		<div class="kd-horizontal-tab">
                    	<div class="kode-thumb">
                        	<img src="images/tabs-imgs.png" alt="">
                        </div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">Info</a></li>
                        <li role="presentation"><a href="#Why" aria-controls="Why" role="tab" data-toggle="tab">Why Us</a></li>
                        <li role="presentation"><a href="#Involve" aria-controls="Involve" role="tab" data-toggle="tab">Involve</a></li>
                        <li role="presentation"><a href="#Support" aria-controls="Support" role="tab" data-toggle="tab">Support</a></li>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Info">
                        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Why">
                        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Involve">
                        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Support">
                        	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                      </div>
                    
                    </div>
                    	</div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kd-accordion">
                        	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Our Mission and Vision
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      24 Hours full video support
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Userfriendly Design
                                      <i class="fa fa-minus"></i>
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ABOUT INFO SECTION END-->
        <!--TOP AUTHERS START-->
        <section class="kode-top-author gray-bg">
        	<div class="container">
            	<!--SECTION HEADING START-->
            	<div class="section-content">
                	<h2>The Top Writers of 2015</h2>
                    <p>The Top Authors Books are available and are presented in the Book Guide and in Books Library where every user can purchase the books easily. The top writers and authors books are also published here. Dont miss the change of getting those precious books from here.</p>
                </div>
                <!--SECTION HEADING END-->
                <div class="row">
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author2.png"></a>
                            <div class="kode-caption">
                                <h4>christina noto</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author.png"></a>
                            <div class="kode-caption">
                                <h4>Allen Jack</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                    <!--AUTHOR LIST START-->
                    <div class="col-md-4">
                        <div class="kode-author kode-author-2">
                            <a href="#"><img alt="" src="images/author3.png"></a>
                            <div class="kode-caption">
                                <h4>Sarah Marlin</h4>
                                <p>Co-Founder</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--AUTHOR LIST END-->
                </div>
            </div>
        </section>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
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
                <button>Subscribe</button>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <ul>
                        	<li><i class="fa fa-tags"></i><p>450 fifth Avenue, 34th floor. NYC</p></li>
                            <li><i class="fa fa-phone"></i><p>(+800) 123 4567 890</p></li>
                            <li><i class="fa fa-envelope-o"></i><p><a href="mailto:info@bookstore.com">info@bookstore.com</a></p></li>
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
        	<p>Copyrights © 2015-16 KodeForest. All rights reserved</p>
            <div class="cards"><img src="images/cards.png" alt=""></div>
        </div>
    </div>
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script src="js/dl-menu/modernizr.custom.js"></script>
<script src="js/dl-menu/jquery.dlmenu.js"></script>
<script src="js/classie.js"></script> 
<script src="js/functions.js"></script>
</body>
</html>