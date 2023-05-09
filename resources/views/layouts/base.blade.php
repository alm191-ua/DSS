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
                    <button type="submit" style="align-items: center; display: inline-flex;">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <!--NEWSLETTER END-->

    <footer>
        <div class="container ad-before">
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
                                <p>There are some amazing submissions in the latest<a href="#"> @elonmusk</a></p>
                            </li>
                            <li>
                                <p>There are some amazing submissions in the latest<a href="#"> @elonmusk</a></p>
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
                            <li><a href="{{route('books-list')}}">Specials</a></li> 
                            <li><a href="{{route('books-list')}}">New products</a></li> 
                            <li><a href="{{route('books-list')}}">Best sellers</a></li> 
                            <li><a href="{{route('contactus')}}">Contact us</a></li> 
                            <li><a href="{{route('terms')}}">Terms of use</a></li> 
                            <li><a href="{{route('contactus')}}">Sitemap</a></li>  
                        </ul>
                    </div>
                </div>
                <!--CATEGORY WIDGET END-->
                <!--NEWSLETTER START-->
                <div class="col-md-3">
                    <div class="widget widget-newletter">
                        <h2>Newsletter</h2>
                        <p> {{ __('master.newsletter_text') }} </p>
                        <form action="{{ route('newsletter.store') }}" method="POST">
                            @csrf
                            <input type="text" name="email" placeholder="E-mail">
                            <button type="submit" style="align-items: center; display: inline-flex;">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!--NEWSLETTER START END-->
            </div>
        </div>
    </footer>

@endsection