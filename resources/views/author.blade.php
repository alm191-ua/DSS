@extends('layouts.style1')

@section('title', 'Author Detail')

@section('content')
    @parent

    <!--CONTENT START-->
    <div class="kode-content">
        <!--AUTHOR DETAIL SECTION START-->
        <section class="kode-author-detail-2">
        	<div class="container">
            	<div class="kode-thumb">
                	<img src="{{asset('storage/authors/'.$author->image)}}" alt="author image"
                        onerror="this.onerror=null;this.src='{{ asset('images/author.png') }}';"
                    >
                </div>
                <div class="kode-text">
                	<h2>{{$author->name}}</h2>
                    <h5>Author</h5>
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
                    <p>{{ $author->info }}</p>
                    <div class="signature">
                    	<img src="images/signature-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--AUTHOR DETAIL SECTION END-->
        <!--KODE BIOGRAPHY SECTION START-->  
        {{-- <section class="kode-bio">
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
        </section>     --}}
        <!--KODE BIOGRAPHY SECTION END--> 
        <!--RECENT RELEASE SECTION START-->  
        <section class="recent-release">
        	<div class="container">
            	<div class="section-heading-1">
                    <h2> Published Books</h2>
                    <div class="kode-icon"><i class="fa fa-book"></i></div>
                </div>
                <div class="owl-release owl-theme">
                    @foreach ($author->books as $book)
                        <div class="item">
                            <div class="book-released">
                                <div class="kode-thumb">
                                    <a href="#"><img src="{{asset('storage_images/books/' . $book->image)}}" alt=""
                                        onerror="this.onerror=null;this.src='{{ asset('images/book.png') }}';"
                                        ></a>
                                    <div class="cart-btns">
                                        <a href="{{route('book', $book->id)}}" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <h3>{{ $book->title }}</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    
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
    
@endsection