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
<link href="css/themetypo.css" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- COLOR FILE -->
<link href="css/color.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- BX SLIDER -->
<link href="css/jquery.bxslider.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/bootstrap-slider.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/widget.css" rel="stylesheet">
<!-- FONT AWESOME -->
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
        	<h2>Author Detail</h2>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Books Guide</a></li>
              <li class="active">Author Detail</li>
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
    <!--CONTENT START-->
    <div class="kode-content">
        <!--AUTHOR DETAIL SECTION START-->
        <section class="kode-author-detail-2">
        	<div class="container">
            	<div class="kode-thumb">
                	<img src="images/author-detail.jpg" alt="">
                </div>
                <div class="kode-text">
                	<h2>Charlas f. stanley</h2>
                    <h5>Co-Founder &amp; Author</h5>
                    <div class="contact-box">
                    	<div class="row">
                        	<div class="col-md-8">
                            	<table>
                                  <tr>
                                    <td><i class="fa fa-phone"></i></td>
                                    <td>Phone No:</td>
                                    <td>333-365-9874</td>
                                  </tr>
                                  <tr>
                                    <td><i class="fa fa-envelope-o"></i></td>
                                    <td>Email ID:</td>
                                    <td>info@author-name.com</td>
                                  </tr>
                                  <tr>
                                    <td><i class="fa fa-fax"></i></td>
                                    <td>Fax No:</td>
                                    <td>333-365-9874</td>
                                  </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                            	<div class="social-icon">
                                	<ul>
                                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="signature">
                    	<img src="images/signature-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--AUTHOR DETAIL SECTION END-->
        <!--KODE BIOGRAPHY SECTION START-->  
        <section class="kode-bio">
        	<div class="container">
            	<div class="section-heading-1">
                    <h2> Biography</h2>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <div class="kode-text">
                	<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                </div>
                <div class="kode-text">
                	<div class="row">
                    	<div class="col-md-6">
                        	<h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                        <div class="col-md-6">
                        	<h2>Early Life and Education</h2>
                            <p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs. Any files you download or bookmarks you create will be kept cookie store, or search history after you’ve closed all of your incognito tabs. cookie store, or search history after you’ve closed all of your incognito tabs. in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <!--KODE BIOGRAPHY SECTION END--> 
        <!--RECENT RELEASE SECTION START-->  
        <section class="recent-release">
        	<div class="container">
            	<div class="section-heading-1">
                    <h2> Published Books</h2>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <div class="owl-release owl-theme">
                	<div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-2.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-3.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-4.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-2.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-3.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-4.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-2.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-3.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="book-released">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/new-release-4.png" alt=""></a>
                                <div class="cart-btns">
                                	<a href="#" data-toggle="tooltip" title="582"><i class="fa fa-eye"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<h3>Donec eu libero sit</h3>
                                <div class="rating">
                                	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>
        </section>
        <!--RECENT RELEASE SECTION END-->
        <!--COUNT UP SECTION START-->
        <div class="lib-count-up-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">21</span>
                            <p>Working Year</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">8589</span>
                            <p>Books Sold</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">458</span>
                            <p>Top Author</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="count-up">
                            <span class="counter circle">750</span>
                            <p>Book Published</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--CERTIFICATES SECTION START-->
        <section>
        	<div class="container">
        		<!--SECTION HEADING START-->
        		<div class="section-heading-1">
                    <h2> Latest Awards & Certificate</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <!--SECTION HEADING END-->
                <div class="row">
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-1.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-2.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-3.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-4.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-1.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                	<div class="col-md-4 col-sm-6">
                		<!--CERTIFICATE START-->
                		<div class="kode-certificate">
                			<div class="kode-thumb">
                				<a href="#"><img src="images/certificate-2.png" alt=""></a>
                			</div>
                			<div class="kode-text">
                				<h2>2015 Caldecott Certificate</h2>
                				<p>Pages you view in incognito tabs won’t stick around in your browser’s history, cookie store, or search history after you’ve closed all of your incognito tabs.</p>
                			</div>			
                		</div>
                		<!--CERTIFICATE END-->
                	</div>
                </div>
        	</div>
        </section>
        <!--CERTIFICATES SECTION END-->
        <!--GIFT CARD SECTION START--> 
        <section class="lib-textimonials">
        	<div class="container">
            	<!--SECTION HEADING START-->
           <div class="section-heading-1 dark-sec">
                <h2>Our Testimonials</h2>
                <p>What our clients say about the books reviews and comments</p>
                <div class="kode-icon"><i class="fa fa-book"></i></div>
            </div>
            <!--SECTION HEADING END-->
            <div class="owl-testimonials owl-theme">
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>I loved thrift books! It's refreshing to buy discounted books and have them shipped quickly. I could afford to buy 3 copies to hand out to friends also interested in the topic. Thank you!! Read more</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials1.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>You have great prices and the books are in the shape as stated. Although it takes so long for them to get to their destination. I have been ordering for years and get great books in the shape said.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img4.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>I have made many orders with Thrift Books. I always get exactly what I order in a timely manner at a great price. I have had to contact the customer service team once.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img3.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>I couldn't believe the prices for such great books, at no shipping! I am going to be a good customer at your store! And, I am telling my Facebook friends about.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/testimonials-img2.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>ordered 14 books, received 14 books within a week. very happy with customer support and with the receipt of books. Keep It Up Good Guide we love you the best books library available today.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/writer2.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
                <!--BLOG ITEM START-->
                <div class="item">
                    <div class="lib-testimonial-content">
                    	<div class="kode-text">
                        	<p>Thrift Books is the absolute best book seller on the Internet!! Their selection is marvelous, price/shipping unbeatable and timely service is outstanding.</p>
                        </div>
                        <div class="kode-thumb">
                            <img src="images/writer3.png" alt="">
                        </div>
                        <h4>Jenifer Robbert</h4>
                        <p class="title">Author</p>
                    </div>
                </div>
                <!--BLOG ITEM END-->
            </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->
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
<script src="js/dl-menu/modernizr.custom.js"></script>
<script src="js/dl-menu/jquery.dlmenu.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/classie.js"></script> 
<script src="js/functions.js"></script>
</body>
</html>