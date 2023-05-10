@extends('layouts.style1')

@section('title', 'Authors')

@section('content')
    @parent

    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <div class="row ad-product"> {{-- firstrow --}}
                @foreach ($authors as $author)
                    <div class="col-md-4 col-sm-6">
                        <div class="kode-author">
                            <a href="{{ route('author', $author->id) }}"><img src="{{ asset('storage/authors/' . $author->image) }}" alt="author image"
                                onerror="this.onerror=null;this.src='{{ asset('images/author.png') }}';"                                        
                                ></a>
                            <div class="kode-caption">
                                <h4>{{ $author->name }}</h4>
                                <p>Authors</p>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach

                {{ $authors->links() }}
            </div>
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    <!--NEWSLETTER START-->

@endsection