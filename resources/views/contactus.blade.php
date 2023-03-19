@extends('layouts.style1')

@section('title')
    {{ __('master.menu.contactus') }}
@endsection

@section('content')
    @parent

    <div class="kode-map">
    	<div class="map-canvas" id="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6626.882783308994!2d-0.5164888569658425!3d38.3843297884377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6236ba2a07b50f%3A0x161c6e192605005b!2sEdificio%2016%20-%20Escuela%20Politecnica%20Superior%201%2C%2003690%20San%20Vicente%20del%20Raspeig%2C%20Alicante!5e0!3m2!1ses!2ses!4v1678821115849!5m2!1ses!2ses" 
                width="100%" height="450" style="border:0; margin: auto" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>
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
                                <p>{{ __('master.localization') }}</p>
                            </li>
                            <li>
                            	<i class="fa fa-phone border-yellow"></i>
                                <h4>Phone &amp; Fax</h4>
                                <p>(+34) 555 555 555</p>
                            </li>
                            <li>
                            	<i class="fa fa-envelope-o border-blue"></i>
                                <h4>Email</h4>
                                <p><a href="mailto:contact.wordwaves@gmail.com">contact.wordwaves@gmail.com</a></p>
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