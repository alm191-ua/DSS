@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!--BANNER START-->
    <div class="kode-banner">
    	<ul class="bxslider">
        	<li>
            	<img src="images/banner-1.png" alt=""> 
                <div class="kode-caption">
                	<h2>book guide</h2>
                    <h5>online books store</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
					<div class="input-container">
                    	<input type="text" placeholder="Enter Your Book Title Here">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </li>
            <li>
            	<img src="images/banner-2.png" alt="">
                <div class="kode-caption">
                	<h2>book Reading</h2>
                    <h5>Best Book Available</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
					<div class="input-container">
                    	<input type="text" placeholder="Enter Your Book Title Here">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </li>
            <li>
            	<img src="images/banner-3.png" alt="">
                <div class="kode-caption">
                	<h2>Book Store</h2>
                    <h5>Books Guiders</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
					<div class="input-container">
                    	<input type="text" placeholder="Enter Your Book Title Here">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--BANNER END-->
    <!--BUT NOW START-->
    <section class="buy-template">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>The World's Largest online bookstore</h2>
                    <p>Here you can get the Ebooks easily where are available in our stock. </p>
                </div>
                <div class="col-md-6">
                    <div class="kode-btns">
                        <a href="#">Start Now</a>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BUT NOW END-->
    <!--CONTENT START-->
    <div class="kode-content">
        <!--BOOK GUIDE SECTION START-->
        <section class="kode-services-section">
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content">
                	<h2>The book guide <span>online</span> book store</h2>
                    <p>The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>
                </div>
                <!--SECTION CONTENT END-->
                <div class="row">
                	<div class="col-md-3">
                    	<div class="kode-service">
                        	<i class="fa fa-gift"></i>
                            <h3><a href="#"> Free Gift Wrap</a></h3>
                            <p>Free gift wrapping on all purchases. Wrapping includes a blue box with your choice with Ribbon.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="kode-service">
                        	<i class="fa fa-book"></i>
                            <h3><a href="#">Buy Selling Used Books</a></h3>
                            <p>We provide you the best selling of the used books. You can sell them to us if you have read them once.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="kode-service">
                        	<i class="fa fa-truck"></i>
                            <h3><a href="#">Free Shipping</a></h3>
                            <p>We provide free shipping over the $1000 purchase from one country to another with extra discount.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="kode-service">
                        	<i class="fa fa-calculator"></i>
                            <h3><a href="#">Returns &amp; Exchange</a></h3>
                            <p>Return and Exchange is possible in 5 days. In case of lost or damage Return & Exchange is not possible.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        <!--TOP SELLERS SECTION START-->
        <section class="gray-bg kode-best-sellter-sec">
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content">
                	<h2>Best <span>Top</span> Sellers</h2>
                    <p>The Book Guide and the Book Library has one of the top sellers books with them. Those books which are sold with in few days and still available in our stock which you can get with us easily.</p>
                </div>
                <!--SECTION CONTENT END-->
                <div class="row">
                	<!--PRODUCT GRID START-->
                	<div class="col-md-3">
                    	<div class="best-seller-pro">
                        	<figure>
                            	<img src="images/book2.png" alt="">
                            </figure>
                            <div class="kode-text">
                            	<h3>Broken Visions</h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>Broken Visions Jessica</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Jessica Sorensen</p>
                                <p class="price">$692.20</p>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                	<div class="col-md-3">
                    	<div class="best-seller-pro">
                        	<figure>
                            	<img src="images/book6.png" alt="">
                            </figure>
                            <div class="kode-text">
                            	<h3><a href="#">Bridget Jones</a></h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>Mad About the Boy</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Helen Fielding</p>
                                <p class="price">$77.70</p>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                	<div class="col-md-3">
                    	<div class="best-seller-pro">
                        	<figure>
                            	<img src="images/book3.png" alt="">
                            </figure>
                            <div class="kode-text">
                            	<h3><a href="#">Fairies in my FirePlace</a></h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>Art History Mystery</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>R.L Naquin</p>
                                <p class="price">$334.50</p>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                	<div class="col-md-3">
                    	<div class="best-seller-pro">
                        	<figure>
                            	<img src="images/book8.png" alt="">
                            </figure>
                            <div class="kode-text">
                            	<h3><a href="#">Chrysalis</a></h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>The Brave Girl</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>William S.</p>
                                <p class="price">$24.75</p>
                                <a href="#" class="add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
				</div>	
            </div>
        </section>
        <!--TOP SELLERS SECTION END-->
        <!--VIDEO SECTION START-->
        <section class="kode-video-section">
        	<div class="container">
            	<h2>Play a video on Parallax</h2>
                <a class="fa fa-play play" href="https://www.youtube.com/watch?v=DFIJ6AUOY9c"></a>
                <h4>Title: Book Store</h4>
                <p>Source: Youtube, Vimeo</p>
            </div>
        </section>
        <!--VIDEO SECTION END-->
        <!--BEST SELLER SLIDER SECTION START-->
        <section>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4">
                    	<div class="kode-best-slider">
                        	<h2>New Product</h2>
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book9.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Big Magic</h4>
                                            <p>Creative Living</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$1024</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book8.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Ice & Fire</h4>
                                            <p>George Martin</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$320</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book7.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Winning</h4>
                                            <p>Mind Set</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$452</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book6.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Dead Water</h4>
                                            <p>Ann Grannger</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$550</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="kode-best-slider">
                        	<h2>Best Seller</h2>
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book5.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Fault In our Stars</h4>
                                            <p>Paper Towns</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$770</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book4.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Ruby Of Egypt</h4>
                                            <p>Cat Howard</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$999</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book3.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Fableheaven</h4>
                                            <p>Brandon Hall</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$269</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book2.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Star Trek</h4>
                                            <p>DisAvowed</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$898</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="kode-best-slider">
                        	<h2>Pre Oder</h2>
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>City Of Bones</h4>
                                            <p>Cassandra Clare</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$363</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book8.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Annette Blair</h4>
                                            <p>Vampire Dragon</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$599</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book9.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>New Moon</h4>
                                            <p>Stephene Mever</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$787</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book2.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Fire Of Life</h4>
                                            <p>Salman Rushdie</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p class="price">$620</p>
                                            <div class="clear"></div>
                                            <a href="#" class="add-to-cart">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BEST SELLER SLIDER SECTION END-->
        <!--TESTIMONIALS START-->
        <section class="testimonial-section">
        	<div class="container">
            	<div class="kode-testimonials-4">
                    <h2>What our client say about us</h2>
                    <ul class="bxslider2">
                        <li>
                            <div class="client-name">
                                <div class="kode-thumb"><img src="images/testimonials-img5.png" alt=""></div>
                                <h2>Anna Doe</h2>
                                <p class="designation">Marketing Manager</p>
                            </div>
                            <div class="kode-text">
                                <p>“Thank you for all your help and assistance over the years! I would have no hesitation in recommending you to my friends.”</p>
                            </div>
                        </li>
                        <li>
                            <div class="client-name">
                                <div class="kode-thumb"><img src="images/testimonials-img2.png" alt=""></div>
                                <h2>Julia Burns</h2>
                                <p class="designation">The Writer</p>
                            </div>
                            <div class="kode-text">
                                <p>“Now two or three times a year (especially after Christmas) my family shops on the Book Library – it’s a tradition!”</p>
                            </div>
                        </li>
                        <li>
                            <div class="client-name">
                                <div class="kode-thumb"><img src="images/testimonials-img3.png" alt=""></div>
                                <h2>Sarah Jefferson</h2>
                                <p class="designation">Librarian Manager</p>
                            </div>
                            <div class="kode-text">
                                <p>“I found what I needed and the prices are super low, and the books arrived in a timely manner. Keep up the great work!”</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--TESTIMONIALS END-->
		<section class="kode-online-book-store">
			<div class="container">
				<!--SECTION HEADING START-->
            	<div class="section-content">
                	<h2>The book guide <span>online</span> book store</h2>
                    <p>We’re breaking new ground in online bookselling. We believe that education and access to books are basic human rights. That's why books sold on BetterWorldBooks.com help fund high-impact literacy projects in the United States and around the world.</p>
                </div>
                <!--SECTION HEADING END-->
				<div class="row">
					<!--BOOK LISTING START-->
					<div class="col-md-3 col-sm-6">
						<div class="books-listing-4">
							<div class="kode-thumb">
								<a href="#"><img src="images/book.png" alt=""></a>
							</div>
							<div class="kode-text">
								<h3><a href="#">Basic Time Management Course</a></h3>
								<p>Sed ut perspiciatis</p>
							</div>
							<div class="book-price">
								<p>$24.75</p>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
							</div>
							<a href="#" class="add-to-cart">Add to cart</a>
						</div>
					</div>
					<!--BOOK LISTING END-->
					<!--BOOK LISTING START-->
					<div class="col-md-3 col-sm-6">
						<div class="books-listing-4">
							<div class="kode-thumb">
								<a href="#"><img src="images/book2.png" alt=""></a>
							</div>
							<div class="kode-text">
								<h3><a href="#">Basic Time Management Course</a></h3>
								<p>Sed ut perspiciatis</p>
							</div>
							<div class="book-price">
								<p>$24.75</p>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
							</div>
							<a href="#" class="add-to-cart">Add to cart</a>
						</div>
					</div>
					<!--BOOK LISTING END-->
					<!--BOOK LISTING START-->
					<div class="col-md-3 col-sm-6">
						<div class="books-listing-4">
							<div class="kode-thumb">
								<a href="#"><img src="images/book3.png" alt=""></a>
							</div>
							<div class="kode-text">
								<h3><a href="#">Basic Time Management Course</a></h3>
								<p>Sed ut perspiciatis</p>
							</div>
							<div class="book-price">
								<p>$24.75</p>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
							</div>
							<a href="#" class="add-to-cart">Add to cart</a>
						</div>
					</div>
					<!--BOOK LISTING END-->
					<!--BOOK LISTING START-->
					<div class="col-md-3 col-sm-6">
						<div class="books-listing-4">
							<div class="kode-thumb">
								<a href="#"><img src="images/book4.png" alt=""></a>
							</div>
							<div class="kode-text">
								<h3><a href="#">Basic Time Management Course</a></h3>
								<p>Sed ut perspiciatis</p>
							</div>
							<div class="book-price">
								<p>$24.75</p>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
							</div>
							<a href="#" class="add-to-cart">Add to cart</a>
						</div>
					</div>
					<!--BOOK LISTING END-->
				</div>
			</div>
		</section>
        <!--COUNT UP SECTION START-->
        <div class="count-up-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3">
                    	<div class="count-up">
                            <span class="counter circle">3578</span>
                            <p>Books To Read</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="count-up">
                            <span class="counter circle">589</span>
                            <p>Online Users</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="count-up">
                            <span class="counter circle">1250</span>
                            <p>Best Authors</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                    	<div class="count-up">
                            <span class="counter circle">57</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--FROM THE BLOG SECTION START-->
        <section class="kode-blog-section">
        	<div class="container">
            	<!--SECTION HEADING START-->
            	<div class="section-content">
                	<h2>The book guide <span>online</span> book store</h2>
                    <p>We’re breaking new ground in online bookselling. We believe that education and access to books are basic human rights. That's why books sold on BetterWorldBooks.com help fund high-impact literacy projects in the United States and around the world.</p>
                </div>
                <!--SECTION HEADING END-->
                <div class="row">
                	<!--BLOG LIST START-->
                	<div class="col-md-6">
                    	<div class="kode-blog-list">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/blog.jpg" alt=""></a>
                                <div class="blog-date">
                                	<p>15</p>
                                    <span>August</span>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<p>Posted by Cartel</p>
                                <h2>Book Lovers</h2>
                                <p>The Book Lovers is a research project on the phenomenon of artist's novels avaible today.</p>
                                <a href="#" class="more">SEE MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--BLOG LIST END-->
                    <!--BLOG LIST START-->
                	<div class="col-md-6">
                    	<div class="kode-blog-list">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/blog2.jpg" alt=""></a>
                                <div class="blog-date">
                                	<p>10</p>
                                    <span>August</span>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<p>Posted by Jack Howard</p>
                                <h2>The Indie View</h2>
                                <p>The Indie View is the most popular book of the all india times written by a famous author.</p>
                                <a href="#" class="more">SEE MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--BLOG LIST END-->
                    <!--BLOG LIST START-->
                	<div class="col-md-6">
                    	<div class="kode-blog-list">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/blog3.jpg" alt=""></a>
                                <div class="blog-date">
                                	<p>20</p>
                                    <span>August</span>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<p>Posted by Jhon Deo</p>
                                <h2>Modern E-Books</h2>
                                <p>Modern Ebbooks selling is the most advance and popular way of sellings books online today.</p>
                                <a href="#" class="more">SEE MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--BLOG LIST END-->
                    <!--BLOG LIST START-->
                	<div class="col-md-6">
                    	<div class="kode-blog-list">
                        	<div class="kode-thumb">
                            	<a href="#"><img src="images/blog4.jpg" alt=""></a>
                                <div class="blog-date">
                                	<p>15</p>
                                    <span>August</span>
                                </div>
                            </div>
                            <div class="kode-text">
                            	<p>Posted by Julia</p>
                                <h2>Learn With Joy</h2>
                                <p>Now learning is made very easy to learn with joy , E learning is made very easily and comfortable.</p>
                                <a href="#" class="more">SEE MORE</a>
                            </div>
                        </div>
                    </div>
                    <!--BLOG LIST END-->                    
                </div>
            </div>
        </section>
        <!--FROM THE BLOG SECTION END-->
        <!--GIFT CARD SECTION START--> 
        <section class="gift-card-section">
        	<div class="container">
            	<div class="section-content white">
                	<h2>Book Store Gift Card</h2>
                </div>
                <div class="kode-gift">
                	<ul>
                    	<li>
                        	<h2><a href="#"><i class="fa fa-gift"></i>Any Occasion</a></h2>
                            <p>The great philosopher Blaise Pascal believed that human misfortune was the result of other people’s inability “to sit quietly in one’s room”</p>
                        </li>
                        <li>
                        	<h2><a href="#"><i class="fa fa-graduation-cap"></i>Special Occasion</a></h2>
                            <p>Here are many special occasions in the lives of our friends, family and colleagues, and each offers an opportunity to commemorate the day with a unique and personalised book.</p>
                        </li>
                        <li>
                        	<h2><a href="#"><i class="fa fa-smile-o"></i>CArds For Kids</a></h2>
                            <p>The thrill of double war. The excitement of shouting "Gin!" Every kid knows at least a handful of card classics, and every grown up kid remembers the fun of playing them.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->
        <!--SERVICES PACKEGE START-->
        <section class="kode-package-section">
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content">
                	<h2>Find Your <span>Best Price </span> Package</h2>
                    <p>Find your best prices of the books preimum packages that are available with us. You can purchase the prices and get the discount of the purchase of the books.</p>
                </div>
                <!--SECTION CONTENT END-->
            	<div class="row">
                	<div class="col-md-4">
                    	<!--KODE PACKAGE START-->
                    	<div class="kode-package">
                        	<div class="header-bg">
                            	<img src="images/package1.png" alt="">
                            </div>
                            <div class="package-content">
                            	<h2>Personal</h2>
                                <!--PACKAGE PRICE START-->
                                <div class="package-price">
                                    $77
                                    <small>Per Month</small>
                                </div>
                                <!--PACKAGE PRICE END-->
                                <ul>
                                	<li><p>250 E-Books</p></li>
                                    <li><p>10 Comics</p></li>
                                    <li><p>5 Books</p></li>
                                    <li><p>36 Magazines</p></li>
                                </ul>
                                <a href="#" class="purchase">Purchase Now</a>
                            </div>
                        </div>
                        <!--KODE PACKAGE END-->
                    </div>
                    <div class="col-md-4">
                    	<!--KODE PACKAGE START-->
                    	<div class="kode-package">
                        	<div class="header-bg">
                            	<img src="images/package2.png" alt="">
                            </div>
                            <div class="package-content">
                            	<h2>Professional</h2>
                                <!--PACKAGE PRICE START-->
                                <div class="package-price">
                                    $149
                                    <small>Per Month</small>
                                </div>
                                <!--PACKAGE PRICE END-->
                                <ul>
                                	<li><p>350 E-Books</p></li>
                                    <li><p>15 Comics</p></li>
                                    <li><p>15 Books</p></li>
                                    <li><p>50 Magazines</p></li>
                                </ul>
                                <a href="#" class="purchase">Purchase Now</a>
                            </div>
                        </div>
                        <!--KODE PACKAGE END-->
                    </div>
                    <div class="col-md-4">
                    	<!--KODE PACKAGE START-->
                    	<div class="kode-package">
                        	<div class="header-bg">
                            	<img src="images/package3.png" alt="">
                            </div>
                            <div class="package-content">
                            	<h2>Business</h2>
                                <!--PACKAGE PRICE START-->
                                <div class="package-price">
                                    $199
                                    <small>Per Month</small>
                                </div>
                                <!--PACKAGE PRICE END-->
                                <ul>
                                	<li><p>500 E-Books</p></li>
                                    <li><p>20 Comics</p></li>
                                    <li><p>25 Books</p></li>
                                    <li><p>60 Magazines</p></li>
                                </ul>
                                <a href="#" class="purchase">Purchase Now</a>
                            </div>
                        </div>
                        <!--KODE PACKAGE END-->
                    </div>
                </div>
            </div>
        </section>
        <!--SERVICES PACKEGE END-->
    </div>
    <!--CONTENT END-->
@endsection
