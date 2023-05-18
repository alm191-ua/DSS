@extends('layouts.base')

@section('title', 'Home')

@section('content')
    @parent

    <!--BANNER START-->
    <div class="kode-banner" style="z-index:100;">
    	<ul class="bxslider">
        	<li>
            	<img src="images/banner-3.png" alt=""> 
                <div class="kode-caption">
                	<h2>book guide</h2>
                    <h5>online library</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
					
                </div>
            </li>
            <li>
            	<img src="images/banner-2.png" alt="">
                <div class="kode-caption">
                	<h2>book Reading</h2>
                    <h5>Best Book Available</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
					
                </div>
            </li>
            <li>
            	<img src="images/banner-1.png" alt="">
                <div class="kode-caption">
                	<h2>Best library</h2>
                    <h5>Books Guiders</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque laudantium, totam rem aperiam.ipsam voluptatem.</p>
                </div>
            </li>
        </ul>
        <div class="input-container" style=" position: absolute; top: 80%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
            <input id="wv-search-input" class="search-books" style="color: #fff"
                type="text" placeholder="Enter Your Book Title Here" name="wv-search-input">
            <ul class="list-group" id="search-list" style="display: block; position: fixed; 
            background-color: white; z-index: 20; max-height:200px; width:87%; overflow:auto;">
            </ul>
            <button onclick="window.location.href = '/books?search=' + $('#wv-search-input').val()"
                ><i class="fa fa-search"></i></button>
        </div>
    </div>
    <!--BANNER END-->
    {{-- <!--BUT NOW START-->
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
    <!--BUT NOW END--> --}}
    <!--CONTENT START-->
    <div class="kode-content">
        <div class="ad-home">
        </div>
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
                    @foreach ($top_books as $book)
                        <div class="col-md-3">
                            <div class="best-seller-pro">
                                <figure>
                                    <img src="{{ asset('storage/books/' . $book->image) }}" alt="book image"
                                        onerror="this.src='{{ asset('images/default.png') }}'">
                                </figure>
                                <div class="kode-text">
                                    <h3>{{ substr($book->title, 0, 50) }}{{ strlen($book->title) > 50 ? '...' : '' }}</h3>
                                </div>
                                <div class="kode-caption">
                                    <h3>{{ substr($book->title, 0, 50) }}{{ strlen($book->title) > 50 ? '...' : '' }}</h3>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                    <p>{{ $book->author->name }}</p>
                                    <a href="#" class="add-to-cart">Add To Bookshelf</a>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
				</div>	
            </div>
        </section>
        <!--TOP SELLERS SECTION END-->
        <!--VIDEO SECTION START-->
        <section class="kode-video-section">
        	<div class="container">
            	<h2>This is not a RickRoll</h2>
                <a class="fa fa-play play" href="https://youtu.be/dQw4w9WgXcQ" target="_blank"></a>
                <h4>Title: Word Waves</h4>
                <p>Source: Youtube</p>
            </div>
        </section>
        <!--VIDEO SECTION END-->
        <!--BEST SELLER SLIDER SECTION START-->
        <section>
        	<div class="container">
            	<div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <div class="kode-best-slider">
                            <h2>{{$titulos[$i]}}</h2>
                            <ul class="bxslider">
                                @for ($x=0;$x<2;$x++)
                                    <li>
                                        @for ($j=0; $j<2 ; $j++)
                                        @php
                                            $indice = ($i * 4) + ((2 * $x) + $j);
                                        @endphp
                                            <div class="kode-best-pro-seller">
                                                <div class="kode-thumb">
                                                    <img src="{{ asset('storage/books/' . $new_books[$indice]->image) }}" alt="book image"
                                                    onerror="this.src='{{ asset('images/default.png') }}'">
                                                </div>
                                                <div class="kode-text">
                                                    <h4>{{ substr($new_books[$indice]->title, 0, 50) }}{{ strlen($book->title) > 50 ? '...' : '' }}</h4>
                                                    <p>{{ $new_books[$j]->author->name }}</p>
                                                    <div class="rating">
                                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        @endfor
                                    </li> 
                                @endfor
                            </ul>
                        </div>
                    </div>
                @endfor
                </div>
            </div>
        </section>
        <!--BEST SELLER SLIDER SECTION END-->
        <!--TESTIMONIALS START-->
        <section class="testimonial-section">
        	<div class="container">
            	<div class="kode-testimonials-4">
                    <h2>AUTORES DESTACADOS</h2>
                    <ul class="bxslider2">
                        @foreach ($new_authors as $author)
                        <li>
                            <div class="client-name">
                                <div class="kode-thumb">
                                    <a href="{{ route('author', $author->id) }}">
                                        <img src="{{ asset('storage/authors/' . $author->image) }}" alt="author image"
                                        onerror="this.onerror=null;this.src='{{ asset('images/author.png') }}';">
                                    </a>
                                </div>
                                <h2>{{$author->name}}</h2>
                            </div>
                            <div class="kode-text">
                                <p>
                                    {{ substr($author->info, 0, 150) }}
                                    {{ strlen($author->info) > 150 ? '...' : '' }}
                                </p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <!--TESTIMONIALS END-->
        <!--COUNT UP SECTION START-->
        <div class="count-up-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3">
                    	<div class="count-up">
                            <span class="counter circle">{{ $num_books }}</span>
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
                            <span class="counter circle">{{ $num_authors }}</span>
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

        <!--GIFT CARD SECTION START--> 
        <section class="gift-card-section">
        	<div class="container">
            	<div class="section-content whiteto">
                	<h2>¡Suscríbete a nuestro boletín y aprovecha estas ventajas exclusivas!</h2>
                </div>
                <div class="kode-gift">
                	<ul>
                    	<li>
                        	<h2>Acceso anticipado a las últimas novedades</h2>
                            <p>Al ser parte de nuestro selecto grupo de suscriptores, recibirás información privilegiada sobre nuestros nuevos lanzamientos de ebooks.</p>
                        </li>
                        <li>
                        	<h2>Recursos gratuitos y contenido exclusivo</h2>
                            <p>omo suscriptor de nuestro newsletter, tendrás acceso a recursos gratuitos y contenido exclusivo que no estará disponible en otro lugar.</p>
                        </li>
                        <li>
                        	<h2>Contenido adicional y recomendaciones personalizadas</h2>
                            <p>Nuestro newsletter no solo te mantendrá informado sobre los lanzamientos y ofertas, sino que también te ofrecerá contenido adicional de valor.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--GIFT CARD SECTION END-->
    </div>
    <!--CONTENT END-->
@endsection
