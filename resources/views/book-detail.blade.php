@extends('layouts.style1')

@section('title', 'Book Detail')

@section('content')
    @parent

    <style>
        .inactive {
            background-color: #ccc;
            color: #fff;
            cursor: not-allowed;
            pointer-events: none;
        }

    </style>

    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
    	<div class="container">
            <div class="row">
                <div class="col-md-9" style="margin-left: 13%">
                    <!--BOOK DETAIL START-->
                    <div class="lib-book-detail">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="kode-thumb">
                                    <img src="{{ asset('storage_images/books/'.$book->image) }}" alt="book image"
                                    onerror="this.src='{{ asset('images/default.png') }}'">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="kode-text">
                                	<h2>{{ $book->title }}</h2>
                                    <div class="product-review">
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <p>4 Customer reveiws</p>
                                    </div>
                                    <div class="product-price">
                                        <p>Author : <span class="color">{{ $book->author->name }}</span></p>
                                    </div>
                                    {{-- <div class="book-text">
                                    	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                    </div> --}}
                                    <div class="book-text">
                                    	<p>Category: {{ $book->category->tag }}</p>
                                        <p>ISBN: {{ $book->isbn }}</p>
                                        <p>ID: {{ $book->id }}</p>
                                        {{-- <p>Tag: books.</p>
                                        <p>Author: Daniel Abraham</p>
                                        <p>Publisher: Journal inc</p>
                                        <p>Product ID: 1100</p> --}}
                                    </div>
                                    @auth
                                        @php
                                            $bookshelf = Auth::user()->bookshelves->first(); 
                                            // TODO: add a dropdown to select bookshelf
                                        @endphp
                                            {{-- <select name="bookshelf" id="bookshelf">
                                                @foreach (Auth::user()->bookshelves as $bookshelf)
                                                    <option value="{{ $bookshelf->id }}">{{ $bookshelf->name }}</option>
                                                @endforeach
                                            </select> --}}
                                            {{-- <form action="{{ route('bookshelf.add_book', ['book_id' => $book->id, 'bookshelf_id' => $bookshelf->id]) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="add-to-cart">Add To Bookshelf</button>
                                            </form> --}}
                                            @if ($bookshelf)
                                                <a 
                                                    href="{{ route('bookshelf.add_book', ['book_id' => $book->id, 'bookshelf_id' => $bookshelf->id]) }}"
                                                    class="add-to-cart">Add To Bookshelf
                                                </a>
                                            @else
                                                <a href="#" class="add-to-cart inactive">Add To Bookshelf</a>
                                            @endif
                                    @else
                                        <a href="#" class="add-to-cart inactive">Add To Bookshelf</a>
                                    @endauth
                                    <a href="{{ route('book-download', $book->id) }}" class="add-to-cart">Download</a>
                                    <a href="{{ route('book-read', $book->id) }}" class="add-to-cart" target="_blank">Read</a>
                                    {{-- <a href="#" class="add-to-cart">Add To Cart</a>
                                    <a href="#" class="add-to-cart">Add To Wishlist</a>
                                    <a href="#" class="add-to-cart">Get a Quote</a> --}}
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
                            <li role="presentation"><a href="#read" aria-controls="read" role="tab" data-toggle="tab">Read</a></li>
                            {{-- <li role="presentation"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
                            <li role="presentation"><a href="#CustomTab" aria-controls="CustomTab" role="tab" data-toggle="tab">Custom Tab</a></li> --}}
                        </ul>
                        <!--NAV TABS END-->
                        <!--TAB PANEL START-->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Description">
                                {{-- <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p> --}}
                                <p>{{ $book->description }}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="kode-comments">
                                    <!--Formulario review -->
                                    <div class="card">
                                        <div class="card-header">{{ __('book_details.create_review') }}</div>

                                        <div class="card-body">
                                            <form style="margin-bottom: 5%;" method="POST" action="{{ route('review.store', $book->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="message">{{ __('Mensaje') }}</label>
                                                    <textarea id="message" type="text" rows="5" class="form-control @error('message') is-invalid @enderror" name="message" required autocomplete="message"></textarea>

                                                    @error('message')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary">{{ __('Crear review') }}</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!--Formulario review -->

                                    <ul>
                                        @foreach ($reviews as $review)
                                            <li>
                                                <div class="kode-thumb">
                                                    <a href="#"><img alt="user image" src="{{ asset('storage/users/' . $review->user->image) }}"></a>
                                                </div>
                                                <div class="kode-text">
                                                    <h4>{{ $review->user->username }}</h4>
                                                    <p class="designation">{{ $review->user->email }}</p>
                                                    <p>{{ $review->comment }}</p>
                                                    {{-- <a class="reply" href="#">Reply</a> --}}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>                        
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="read" style="height: 60em">
                                {{-- show the pdf book embed --}}
                                <div class="embed-responsive embed-responsive-16by9" style="height: 60em">
                                    {{-- <object data="{{ asset('books/'.$book->file) }}" type="application/pdf" width="100%" height="100%">
                                        <p>It appears you don't have a PDF plugin for this browser.
                                        No biggie... you can <a href="{{ route('book-download', $book->id) }}">click here to
                                        download the PDF file.</a></p>
                                    </object> --}}
                                    {{-- <iframe src="{{ asset('books/'.$book->file) }}" width="100%" height="100%" style="border: none;"></iframe> --}}
                                    {{-- if exists file in app/book_files --}}
                                    {{-- @if (Storage::exists(asset('storage_books/'.$book->file))
                                        <embed style="height: 60em" src="{{ asset('books/'.$book->file) }}" width="100%" height="100%" />
                                    @else
                                        <embed style="height: 60em" src="{{ asset('404') }}" width="100%" height="100%" />
                                    @endif --}}
                                    <embed style="height: 60em" src="{{ asset('storage_books/'.$book->file) }}" width="100%" height="100%" />
                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="tab-pane fade" id="tags">
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
                            </div> --}}
                            {{-- <div role="tabpanel" class="tab-pane fade" id="CustomTab">
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p> 
                                <p>Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p> 
                            </div> --}}
                        </div>
                        <!--TAB PANEL END-->
                    </div>
                    <!--PRODUCT REVIEW TABS END-->
                    <!--RELATED PRODUCTS START-->
                    <div class="lib-related-products">
                        <h2>Related Books - Category: {{ $book->category->tag }}</h2>
                        <div class="row">
                            @foreach ($related_books as $book)
                                <!--PRODUCT GRID START-->
                                <div class="col-md-4">
                                    <div class="best-seller-pro">
                                        <figure>
                                            <img src="{{ asset('storage_images/books/'.$book->image) }}" alt="book image"
                                                onerror="this.src='{{ asset('images/default.png') }}'">
                                        </figure>
                                        <div class="kode-text">
                                            <h3><a href="#">{{ $book->author->name }}</a></h3>
                                        </div>
                                        <div class="kode-caption">
                                            <h3>{{ $book->title }}</h3>
                                            <div class="rating">
                                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            <p>{{ $book->author->name }}</p>
                                            {{-- <p class="price">$334.50</p> --}}
                                            <a href="#" class="add-to-cart">Add To Bookshelf</a>
                                        </div>
                                    </div>
                                </div>
                                <!--PRODUCT GRID END-->
                            @endforeach
                        </div>
                    </div>
                    <!--RELATED PRODUCTS END-->
                </div>
            </div>
        </div>
        </div>

@endsection