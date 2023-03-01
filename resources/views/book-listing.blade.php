<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Store - Book Guide Author, Publication and Store</title>
<!-- CUSTOM STYLE -->
<link href="style.css" rel="stylesheet">
<!-- THEME TYPO -->
<link href="css/themetypo.css" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- COLOR FILE -->
<link href="css/color.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- BX SLIDER -->
<link href="css/jquery.bxslider.css" rel="stylesheet">

<link href="css/bootstrap-slider.css" rel="stylesheet">

<link href="css/widget.css" rel="stylesheet">

<link href="css/shortcode.css" rel="stylesheet">
<!-- responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Component -->
<link href="js/dl-menu/component.css" rel="stylesheet">

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
        	<h2>Books Listing</h2>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Books Guide</a></li>
              <li class="active">Books Listing</li>
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
	
	
    <div class="kode-content padding-tb-50">
        <div class="container">
        	<div class="row">
                <!--SIDEBAR START-->
                <div class="col-md-3 sidebar">
                	<!--SEARCH WIDGET START-->	
                    <div class="widget widget-search">
                        <h2>Search</h2>
                    	<div class="input-container">
                    		<input type="text" placeholder="Enter Keyword">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <!--SEARCH WIDGET END-->
                    <!--PRICE FILTER WIDGET START-->
                    <div class="widget widget-price-filter">
                    	<h2>Filter by Price</h2>
                        <b>$ 10</b> 
                        <b class="pull-right">$ 1000</b>
                        <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[10,400]"/>
                        <a href="#" class="filter">Filter</a>
                    </div>
                    <!--PRICE FILTER WIDGET END-->
                    <!--NEW ARRIVAL WIDGET START-->
                    <div class="widget widget-new-arrival">
                    	<h2>New Arrival</h2>
                        <ul>
                        	<li>
                            	<div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival1.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                            	<div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival2.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                            	<div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival3.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--NEW ARRIVAL WIDGET END--> 
                    <!--CATEGORY WIDGET START-->
                    <div class="widget widget-categories">
                    	<h2>Categories</h2>
                        <ul>
                        	<li><a href="#">Photoshop</a></li>
                            <li><a href="#">web/Graphic Design</a></li>
                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="#">Video Editing</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">web/Graphic Design</a></li>
                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="#">Video Editing</a></li>
                        </ul>
                    </div>
                    <!--CATEGORY WIDGET END-->
                    <!--NEW ARRIVAL WIDGET START-->
                    <div class="widget widget-new-arrival">
                    	<h2>Best Sellers</h2>
                        <ul class="bxslider">
                            <li>
                            	<div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival2.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival1.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival3.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                            	<div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival3.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival2.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="images/new-arrival1.png" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--NEW ARRIVAL WIDGET END-->
                </div>
                <!--SIDEBAR END-->
                <div class="col-md-9">
                	<div class="row">
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list1.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list2.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list3.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list4.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list5.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list6.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list7.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list9.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list3.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list4.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>

                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list6.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                        <!--PRODUCT GRID START-->
                        <div class="col-md-4 col-sm-6">
                            <div class="books-listing-3">
                            	<div class="kode-thumb">
                                	<a href="#"><img src="images/books-list7.jpg" alt=""></a>
                                </div>
                                <div class="kode-text">
                                	<p class="price">$80.75<span>90.75$</span></p>
                                    <h3>Stephen King</h3>
                                    <div class="kode-caption">
                                    	<p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRODUCT GRID END-->
                    </div>
            	</div>
            </div>
        </div>
    </div>
	 
    <!--CONTENT END-->
    <!--NEWSLETTER START-->
    <section class="kode-newsletters">
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-content white">
                <h2>Subscribe to our Newsletter for the latest news.</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
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