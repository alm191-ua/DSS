@extends('layouts.app')

@section('title', 'Authors')

@section('content')

    <!--BANNER START-->
    <div class="kode-inner-banner" style="background-color: #054a83">
    	<div class="kode-page-heading">
        	<h2>Author</h2>
            <ol class="breadcrumb">
              <li><a href="{{ route('home') }}">Home</a></li>
              {{-- <li><a href="#">Books Guide</a></li> --}}
              <li class="active">Author</li>
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
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!--TOP AUTHERS START-->
        <div class="container">
            <div class="row">
            	<!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author4.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Chinua Achebe</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author5.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Julian Baggini</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author6.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Quentin Blake</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author7.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Saul Bellow</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author8.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Mary Beard</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author9.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Nina Bawden</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author10.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Belinda Bauer</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author11.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>Sebastian Barry</h4>
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
                <!--AUTHOR LIST END-->
                <!--AUTHOR LIST START-->
                <div class="col-md-4 col-sm-6">
                    <div class="kode-author">
                        <a href="#"><img src="images/author12.png" alt=""></a>
                        <div class="kode-caption">
                            <h4>James Baldwin</h4>
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
                <!--AUTHOR LIST END-->
            </div>
            <!--PAGINATION START-->
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!--PAGINATION END-->
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
    <!--NEWSLETTER START-->

@endsection