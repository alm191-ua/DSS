@extends('layouts.custom_banner')

<style>
    .kode-content {
        padding-top: 0px;
    }
    .widget>span {
        display: block;
        margin-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }
    .my-content {
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
        display: inline-flex;
    }
    .account_info {
        margin-right: 20px;
        width: 225px;
        height: 200px;
        border: 1px solid red;
    }
    .bookshelves {
        width: 100%;
        height: 200px;
        border: 1px solid red;
    }
    .shelf {
        width: 400px;
        height: 110px;
        border: 1px solid red;
    }
    .shelf_item {
        width: 20px;
        height: 10px;
        display: inline-block;        
    }
</style>

@section('title', 'Profile')

@section('content')
    @parent

<div class="my-content">
    <div class="account_info">
        <!--SIDEBAR START-->
        <div class="sidebar">
            <div class="widget widget-list">
                <h2>My Account</h2>
                <span>Username: {{ Auth::user()->name ?? 'Guest' }}</span>
                <span>Email: {{ Auth::user()->email ?? 'Guest email' }}</span>
            </div>
        </div>
        <!--SIDEBAR END-->
    </div>

    <div class="bookshelves">
        <!-- Create a rectangle box with just bottom line -->
        <div class="shelf">
            <div class="shelf_item">
                Soy uno
            </div>
            <div class="shelf_item">
                Soy Dos
            </div>
        </div>
    </div>

</div>


    <!--PRODUCT GRID START-->
    <!-- <div class="col-md-4 col-sm-6">
        <div class="books-listing-3">
            <div class="kode-thumb">
                <a href="#"><img src="images/books-list1.jpg" alt=""></a>
            </div>
            <div class="kode-text"> 
                <h3>Stephen King</h3>
                <div class="kode-caption">
                    <p>Well, reading books as a hobby was always a noble, pleasant and very u</p>
                </div>
            </div>
        </div>
    </div> -->
    <!--PRODUCT GRID END-->           
@endsection