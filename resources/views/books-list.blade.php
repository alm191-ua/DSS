@extends('layouts.style1')

@section('title', 'Books List')

@section('style1.content')

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
    
@endsection