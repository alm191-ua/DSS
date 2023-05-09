@extends('layouts.style1')

@section('title', 'Books List')

@section('content')
    @parent

    {{-- <style>
        .inherit-class {
            background-color: inherit;
            border: inherit;
            border-radius: inherit;
            /* box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); */
            margin-bottom: inherit;
            padding: inherit;
        }
        </style> --}}



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
                    		<input type="text" placeholder="Enter Keyword" 
                                onchange="
                                // // con este codigo puedes añadir varios parámetros a la url
                                const {
                                    host, hostname, href, origin, pathname, port, protocol, search
                                } = window.location;
                                let url = origin + pathname + search;
                                let params = new URLSearchParams(search);
                                params.set('search', this.value);
                                url = origin + pathname + '?' + params.toString();
                                window.location.replace(url);
                                // window.location.replace('?search=' + this.value);
                                ">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <!--SEARCH WIDGET END-->
                    <!--PRICE FILTER WIDGET START-->
                    <div class="widget widget-price-filter">
                        <a href="{{ route('books-list') }}" class="filter" 
                            style="background-color: rgb(201, 64, 64); width: 100%; text-align: center">
                            Remove filter</a>
                    </div>
                    <!--PRICE FILTER WIDGET END-->
                    <!--NEW ARRIVAL WIDGET START-->
                    <div class="widget widget-new-arrival">
                    	<h2>New Arrival</h2>
                        <ul>
                            @foreach ($new_arrivals as $book)
                                <li>
                                    <div class="new-arrival">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="{{ asset('storage/books/' . $book->image) }}" 
                                                onerror="this.src = '{{ asset('images/default.png') }}';"
                                                width="150px" height="200px" alt="book image"></a>
                                        </div>
                                        <div class="kode-text">
                                            <h3>{{ substr($book->title, 0, 15) }}...</h3>
                                            <p>{{ substr($book->description, 0, 50) }}...</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--NEW ARRIVAL WIDGET END--> 
                    <!--CATEGORY WIDGET START-->
                    {{-- <div class="widget widget-categories">
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
                    </div> --}}
                    <!--CATEGORY WIDGET END-->
                    <!--NEW ARRIVAL WIDGET START-->
                    {{-- <div class="widget widget-new-arrival">
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
                    </div> --}}
                    <!--NEW ARRIVAL WIDGET END-->
                </div>
                <!--SIDEBAR END-->
                {{-- aviso con los filtros activados, obtenidos de los parametros de la url --}}
                @if (count($filters) > 0)
                    <div class="col-md-9 filters">
                        <div class="alert alert-info">
                            <strong>Filters:</strong>
                            @foreach ($filters as $filter)
                                <span style="margin-left: 0.8em;" class="label label-info">
                                    {{ $filter }}
                                </span>
                            @endforeach
                            <a href="{{ route('books-list') }}" 
                                class="close" aria-label="close" title="Remove filter">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-md-9 filters">
                        <div class="alert alert-info">
                            <strong>Filters:</strong>
                            <span class="label label-info">All</span>
                        </div>
                    </div>
                @endif

                <style>
                    @media (max-width: 768px) {
                        .filters {
                            display: none;
                        }
                    }
                </style>

                <div class="col-md-9">
                	<div class="row">
                        @if (count($books) == 0)
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong>Sorry!</strong> No books found.
                                </div>
                            </div>
                        @endif
                        @foreach ($books as $book)
                            <!--PRODUCT GRID START-->
                            <div class="col-md-4 col-sm-6" style="">
                                <div class="books-listing-3">
                                    <div class="kode-thumb">
                                        <a href="{{ route('book', $book->id) }}"><img src="{{ asset('storage/books/' . $book->image) }}" 
                                            onerror="this.src = '{{ asset('images/default.png') }}';" alt="book image" width="269" height="361"></a>
                                    </div>
                                    <div class="kode-text">
                                        {{-- <p class="price">$80.75<span>90.75$</span></p> --}}
                                        <h3>{{ substr($book->title, 0, 15) }}{{ strlen($book->title) > 15 ? '...' : '' }}</h3>
                                        <div class="kode-caption">
                                            <p>{{ $book->author->name }}</p>
                                            {{-- <a class="inherit-class" href="{{ route('author', $book->author->id) }}">{{ $book->author->name }}</a> --}}
                                            <a href="{{ route('books-list', ['category' => $book->category->tag]) }}">{{ $book->category->tag }}</a>
                                            {{-- <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PRODUCT GRID END-->
                        @endforeach
                        {{ $books->links() }}
                    </div>
            	</div>
            </div>
        </div>
    </div>
	 
    <!--CONTENT END-->
    
@endsection