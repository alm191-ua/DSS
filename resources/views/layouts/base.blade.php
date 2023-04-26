@extends('layouts.app')

@section('footer')
    <!--NEWSLETTER START-->
    <section class="kode-newsletters">
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-content white">
                <h2> {{ __('master.newsletter_title') }} </h2>
                <p> {{ __('master.newsletter_text') }} </p>
            </div>
            <!--SECTION CONTENT END-->
            <div class="input-container">
                {{-- <input type="text" placeholder="Subscribe us"> --}}
                <form action="{{ route('newsletter.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email">
                    <button type="submit">Subcribe</button>
                </form>
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
                            <li><i class="fa fa-tags"></i><p> {{ __('master.localization') }} </p></li>
                            <li><i class="fa fa-phone"></i><p>(+34) 555 555 555</p></li>
                            <li><i class="fa fa-envelope-o"></i><p><a href="mailto:contact.wordwaves@gmail.com">contact.wordwaves@gmail.com</a></p></li>
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
                        <p> {{ __('master.newsletter_text') }} </p>
                        <input type="text" placeholder="E-mail ID">
                        <button>Subscribe</button>
                    </div>
                </div>
                <!--NEWSLETTER START END-->
            </div>
        </div>
    </footer>

@endsection