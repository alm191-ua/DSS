@extends('layouts.style1')

@section('title', 'Book Detail')

@section('style1.content')
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
    	<div class="container">
            <div class="row">
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
                                        <a href="#"><img src="{{ asset('images/new-arrival1.png') }}" alt=""></a>
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
                                        <a href="#"><img src="{{ asset('images/new-arrival2.png') }}" alt=""></a>
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
                                        <a href="#"><img src="{{ asset('images/new-arrival3.png') }}" alt=""></a>
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
                                        <a href="#"><img src="{{ asset('images/new-arrival2.png') }}" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="{{ asset('images/new-arrival1.png') }}" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="{{ asset('images/new-arrival3.png') }}" alt=""></a>
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
                                        <a href="#"><img src="{{ asset('images/new-arrival3.png') }}" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="{{ asset('images/new-arrival2.png') }}" alt=""></a>
                                    </div>
                                    <div class="kode-text">
                                        <h3>consetetur sadip scing</h3>
                                        <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                                    </div>
                                </div>
                                <div class="new-arrival">
                                    <div class="kode-thumb">
                                        <a href="#"><img src="{{ asset('images/new-arrival1.png') }}" alt=""></a>
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
                <div class="col-md-9">
                    <!--BOOK DETAIL START-->
                    <div class="lib-book-detail">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="kode-thumb">
                                    <img src="{{ asset('images/book-detail.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="kode-text">
                                	<h2>Apllication Health and Well-Beign</h2>
                                    <div class="product-review">
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <p>4 Customer reveiws</p>
                                    </div>
                                    <div class="product-price">
                                        <h4>$ 19.90</h4>
                                        <p>Author : <span class="color">Robert L. Lukdke</span></p>
                                    </div>
                                    <div class="book-text">
                                    	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div>
                                    <div class="book-text">
                                    	<p>Category: Books.</p>
                                        <p>Tag: books.</p>
                                        <p>Author: Daniel Abraham</p>
                                        <p>Publisher: Journal inc</p>
                                        <p>Product ID: 1100</p>
                                    </div>
                                    <a href="#" class="add-to-cart">Add To Cart</a>
                                    <a href="#" class="add-to-cart">Add To Wishlist</a>
                                    <a href="#" class="add-to-cart">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BOOK DETAIL END-->
                    <!--PRODUCT REVIEW TABS START-->
                    <div class="product-review-tabs">
                        <!--NAV TABS START-->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Description " aria-controls="Description" role="tab" data-toggle="tab">Description </a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                            <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
                            <li role="presentation"><a href="#CustomTab" aria-controls="CustomTab" role="tab" data-toggle="tab">Custom Tab</a></li>
                        </ul>
                        <!--NAV TABS END-->
                        <!--TAB PANEL START-->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Description">
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="kode-comments">
                                    <ul>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="{{ asset('images/author14.png') }}"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="{{ asset('images/author14.png') }}"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                        
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tags">
                                 <div class="product-tags">
                                    	<a href="#">habemus</a>
                                        <a href="#">accusam</a>
                                        <a href="#">vero</a>
                                        <a href="#">dolor</a>
                                        <a href="#">justo</a>
                                        <a href="#">diam</a>
                                        <a href="#">nonumy</a>
                                        <a href="#">consetetur</a>
                                        <a href="#">erat</a>
                                        <a href="#">sanctus</a>
                                        <a href="#">gubergren</a>
                                        <a href="#">eirmod</a>
                                        <a href="#">habemus</a>
                                        <a href="#">accusam</a>
                                        <a href="#">vero</a>
                                        <a href="#">dolor</a>
                                        <a href="#">justo</a>
                                        <a href="#">diam</a>
                                        <a href="#">nonumy</a>
                                        <a href="#">consetetur</a>
                                        <a href="#">erat</a>
                                        <a href="#">sanctus</a>
                                        <a href="#">gubergren</a>
                                        <a href="#">eirmod</a>
                                        <a href="#">habemus</a>
                                        <a href="#">accusam</a>
                                        <a href="#">vero</a>
                                        <a href="#">dolor</a>
                                        <a href="#">justo</a>
                                        <a href="#">diam</a>
                                        <a href="#">nonumy</a>
                                        <a href="#">consetetur</a>
                                        <a href="#">erat</a>
                                        <a href="#">sanctus</a>
                                        <a href="#">gubergren</a>
                                        <a href="#">eirmod</a>
                                 </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="CustomTab">
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p> 
                                <p>Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p> 
                            </div>
                        </div>
                        <!--TAB PANEL END-->
                    </div>
                    <!--PRODUCT REVIEW TABS END-->
                    <!--RELATED PRODUCTS START-->
                    <div class="lib-related-products">
                        <h2>Related Books</h2>
                        <div class="row">
                            <!--PRODUCT GRID START-->
                            <div class="col-md-4">
                                <div class="best-seller-pro">
                                    <figure>
                                        <img src="{{ asset('images/book7.png') }}" alt="">
                                    </figure>
                                    <div class="kode-text">
                                        <h3><a href="#">Burnt Siena</a></h3>
                                    </div>
                                    <div class="kode-caption">
                                        <h3>Art History Mystery</h3>
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <p>Sara Wisseman</p>
                                        <p class="price">$334.50</p>
                                        <a href="#" class="add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!--PRODUCT GRID END-->
                            <!--PRODUCT GRID START-->
                            <div class="col-md-4">
                                <div class="best-seller-pro">
                                    <figure>
                            	<img src="{{ asset('images/book8.png') }}" alt="">
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
                            <!--PRODUCT GRID START-->
                            <div class="col-md-4">
                                <div class="best-seller-pro">
                                    <figure>
                            	<img alt="" src="{{ asset('images/book12.png') }}">
                            </figure>
                            <div class="kode-text">
                            	<h3><a href="#">Dead Water</a></h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>Dead Water in the Sea</h3>
                                <div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>
                                <p>Ann Grannger</p>
                                <p class="price">$777.75</p>
                                <a class="add-to-cart" href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!--PRODUCT GRID END-->
                        </div>
                    </div>
                    <!--RELATED PRODUCTS END-->
                </div>
            </div>
        </div>
        </div>

@endsection