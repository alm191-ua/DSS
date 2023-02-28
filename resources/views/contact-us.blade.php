@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Contact Us</h2>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Books Guide</a></li>
              <li class="active">Contact Us</li>
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
    <div class="kode-map">
    	<div class="map-canvas" id="map-canvas"></div>
    </div>
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
        	<!--SECTION HEADING START-->
            <div class="section-content">
                <h2>Find us on map</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
            <!--SECTION HEADING END-->
            <div class="row">
            	<div class="col-md-7">
                	<!--CONTACT FORM START-->
                	<div class="comment-form">
                    	<h2>Drop Us an Email</h2>
                        <div class="row">
                        	<div class="col-md-4">
                            	<input type="text" placeholder="Name">
                            </div>
                            <div class="col-md-4">
                            	<input type="text" placeholder="Email">
                            </div>
                            <div class="col-md-4">
                            	<input type="text" placeholder="Phone">
                            </div>
                            <div class="col-md-12">
                            	<textarea></textarea>
                            </div>
                            <div class="col-md-12">
                            	<button>Send Message</button>
                            </div>
                        </div>
                    </div>
                    <!--CONTACT FORM END-->
                </div>
                <div class="col-md-5">
                	<!--LOCATION INFO START-->
                	<div class="kode-location">
                    	<h2>About Location</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi sed quia consequuntur voluptatem quia voluptas sit aspernaturasdeed.</p>
                    </div>
                    <!--LOCATION INFO END-->
                    <div class="contact-info">
                    	<h2>About Location</h2>
                        <ul>
                        	<li>
                            	<i class="fa fa-globe border-red"></i>
                                <h4>Address</h4>
                                <p>New York Street 12</p>
                            </li>
                            <li>
                            	<i class="fa fa-phone border-yellow"></i>
                                <h4>Phone &amp; Fax</h4>
                                <p>+123456789356</p>
                            </li>
                            <li>
                            	<i class="fa fa-envelope-o border-blue"></i>
                                <h4>Email</h4>
                                <p>info@kodeforest.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->

@endsection