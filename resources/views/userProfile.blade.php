@extends('layouts.custom_banner')

@section('title', 'Profile')

@section('content')
    @parent

<style>

    .my-content {
        min-height: 25em;
    }

    .kode-content {
        padding-top: 0px;
    }
    .widget>span {
        display: block;
        margin-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }
    .my-content {
        margin: 20px;
        display: inline-flex;
        width: 97%;
    }
    .account_info {
        margin-right: 20px;
        width: 225px;
        height: 200px;
        
    }
    .bookshelves {
        width: 100em;      
    }
    .form-shelves {
        margin: 10px;
        
        display: inline-flex;
    }

    #shelf-name {
        border-color: rgb(153, 132, 132);
    }

    #shelf-name:focus {
        border-color: rgb(17, 17, 17);
        box-shadow: 0 0 0 0.2rem rgb(215, 190, 190);
    }

    #shelf-name_button {
        margin: 5px;
        padding: 5px;
    }
    #shelf-add_button {
        margin: 5px;
    }
    .shelf_options {
        z-index: 100;
        position: absolute;
        width: auto;
        border: 1px solid #ccc;
        background-color: #cacbc8;
        margin-left: 10px;
        margin-top: 0.5em;
    }
    .borra {
        position: relative;
        cursor: pointer;
        margin-bottom: 0.3em;
        margin-left: 0.3em;
    }

    .borra:hover {
        background-color: #ec2f09;
    }

    .shelf_title {
        margin: 10px;        
        display: inline-flex;
    }
    .shelf {
        overflow-x: scroll;
        margin: 10px;
        height: 250px;
        border: 1px solid #ccc;
    }
    .shelf_books {
        background-color: #ccc;
        margin: 10px;
        margin-top: 4em;
    }
    .shelf_item {
        width: 100px;
        margin: 5px;

        display: inline-block;        
    }

    .my-book {
        /* width: 100px;
        height: 150px; */
        margin: 5px;
        border: 1px solid #0e0c0c;
        display: inline-block;
    }

    .book-delete {
        position: absolute;
        top: 10%;
        left: 55%;
        transform: translate(-80%, -50%);
        /* make it transparent */
        /* opacity: 0;
        transition: opacity 0.3s ease-in-out; */
    }

    .author_name {
        color : #5b5555;
    }

    .btn-danger {
        border-color: #e0d7d5;
    }

    .btn-danger:hover {
        border-color: #e0d7d5;
    }

    /* .my-book:hover {
        margin: 5px;
        border: 1px solid #0e0c0c;
        display: inline-block;
        opacity: 0.5;
    } */

</style>

<div class="my-content">
    <div class="account_info">
        <!--SIDEBAR START-->
        <div class="sidebar">
            <div class="widget widget-list">
                <h2>My Account</h2>
                <img style="border-radius: 50%; border: 1px solid black;" src="{{ asset('storage/users/' . Auth::user()->image) }}" alt="user image" width="100" height="100"
                    onerror="this.src = '{{ asset('storage/users/default_user.png') }}';"    
                >
                <span>Username: {{ Auth::user()->username ?? 'Guest' }}</span>
                <span>Email: {{ Auth::user()->email ?? 'Guest email' }}</span>
                <!-- Button to edit user profile -->
                <a href="{{ route('user-edit.show', Auth::user()->id ?? 0) }}" class="btn btn-primary">Edit Profile</a>
                {{-- <a href="{{ route('user.softdelete', Auth::user()->id ?? 0) }}" onclick="confirm({{__('admin.confirm')}})" class="btn btn-primary">Delete User</a> --}}
            </div>
        </div>
        <!--SIDEBAR END-->
    </div>

    <div class="bookshelves" id="bookshelves">
        <!-- Button to add shelf -->
        <!-- Each tiem button is clicked add <div class="shelf"></div> -->
        <form action="{{route('bookshelf.store')}}" method="POST">
            @csrf
            <div class="form-shelves">
                <label hidden for="shelf-name">Add Shelf</label>
                <input type="text" name="name" id="shelf-name">
                <label hidden for="shelf-name_button">Add Shelf</label>
                <button type="submit" class="btn" id="shelf-add_button">Add Shelf</button>            
            </div>
        </form>     
        
        @if (count($bookshelves) === 0)
            <div class="alert alert-warning" role="alert">
                <strong>Oh snap!</strong> You have no shelves.
            </div>

        @endif

        @foreach ($bookshelves as $bookshelf)
            <form action="{{route('bookshelf.delete', $bookshelf->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <div class="shelf shelf_{{ $bookshelf->name }}">
                    <div class="shelf_options">
                        <h3 class="shelf_title">{{ $bookshelf->name }}</h3>                    
                    </div>
                    <div class="shelf_books">
                        @if ($bookshelf->books->count() <= 0)
                            {{-- no books message with cool bootstrap style --}}
                            <div class="alert alert-warning" role="alert">
                                <strong>Oh snap!</strong> You have no books in this shelf.
                            </div>
                        @else    
                            @foreach ($bookshelf->books as $book)
                                <div class="col-6 col-md-2"
                                    {{-- onmouseover="show_delete_button({{ $bookshelf->id }}, {{ $book->id }})", 
                                    onmouseout="hide_delete_button({{ $bookshelf->id }}, {{ $book->id }})" --}}
                                    >
                                    
                                    <div class="kode-thumb my-book">
                                        <a href="{{ route('book', $book->id) }}"><img src="{{ asset('storage/books/' . $book->image) }}" 
                                            onerror="this.src = '{{ asset('images/default.png') }}';" alt="book image" width="75" height="100"></a>
                                    </div>
                                    <div class="kode-text">
                                        {{-- <p class="price">$80.75<span>90.75$</span></p> --}}
                                        <p style="font-size: 20px; color:black;"
                                            title="{{ $book->title }}"
                                        >{{ substr($book->title, 0, 15) }}{{ strlen($book->title) > 15 ? '...' : '' }}</p>
                                        <div class="kode-caption">
                                            <a href="{{ route('author', $book->author->id) }}" class="author_name">{{ $book->author->name }}</a>
                                            {{-- <p>{{ $book->author->name }}</p> --}}
                                            {{-- <a href="{{ route('books-list', ['category' => $book->category->tag]) }}">{{ $book->category->tag }}</a> --}}
                                        </div>
                                    </div>
                                    <div class="book-delete" id="book-delete_{{ $bookshelf->id }}_{{ $book->id }}">
                                        {{-- <button type="button" class="btn btn-danger" id="shelf-delete_button"
                                            onclick="remove_book({{ $bookshelf->id }}, {{ $book->id }})"
                                        >Delete</button> --}}
                                        <a href="{{ route('bookshelf.remove_book', ['bookshelf_id' => $bookshelf->id, 'book_id' => $book->id]) }}" 
                                            class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this book from this shelf?')"
                                            ><i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    
    <script type="text/javascript">
    function addCruz(bloque) {
        var cruz = document.createElement("button");
        cruz.className = "borra";
        // cruz.innerHTML = '☒';
        cruz.innerHTML = '<i class="fa fa-times"></i>';
        cruz.id = "shelf-delete_button";
        cruz.setAttribute("type", "submit");
        bloque.insertBefore(cruz, bloque.firstChild);
        // add event listener to cruz
        cruz.addEventListener("click", function() {
            // warn user before deleting
            if(!confirm("Are you sure you want to delete this shelf?")) {return;}
        });
    }

    document.getElementById("shelf-add_button").addEventListener("click", function() {
        var shelf_name = document.getElementById("shelf-name_button");
        if (shelf_name.value == "") {
            alert("Please enter a name for the shelf");
            return;
        }
    });

    // wait for the DOM to be loaded
    document.addEventListener("DOMContentLoaded", function(event) {
        // add cruz to each shelf
        var bloques = document.getElementsByClassName("shelf_options");
        for (var i = 0; i < bloques.length; i++) {
            addCruz(bloques[i]);
        }
    });

    function show_delete_button(bookshelf_id, book_id) {
        let delete_button = $('#book-delete_' + bookshelf_id + '_' + book_id);
        delete_button.show();
    }

    function hide_delete_button(bookshelf_id, book_id) {
        let delete_button = $('#book-delete_' + bookshelf_id + '_' + book_id);
        delete_button.hide();
    }

</script>


    <!-- Shelf for books
    <div class="shelf">
        <div class="shelf_item">
            Uno
        </div>
        <div class="shelf_item">
            Dos
        </div>
    </div> -->


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