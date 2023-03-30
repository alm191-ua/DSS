@extends('layouts.custom_banner')

@section('title', 'Profile')

@section('content')
    @parent

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
    #shelf-name_button {
        margin: 5px;
        padding: 5px;
    }
    #shelf-add_button {
        margin: 5px;
    }
    .shelf_options {

        margin-left: 10px;
    }
    .borra {
        position: relative;
        cursor: pointer;
    }
    .shelf_title {
        margin: 10px;        
        display: inline-flex;
    }
    .shelf {
        margin: 10px;
        height: 110px;
        border: 1px solid #ccc;        
    }
    .shelf_books {
        background-color: #ccc;
        margin: 10px;
    }
    .shelf_item {
        width: 100px;
        margin: 5px;
        
        display: inline-block;        
    }
</style>

<div class="my-content">
    <div class="account_info">
        <!--SIDEBAR START-->
        <div class="sidebar">
            <div class="widget widget-list">
                <h2>My Account</h2>
                <span>Username: {{ Auth::user()->username ?? 'Guest' }}</span>
                <span>Email: {{ Auth::user()->email ?? 'Guest email' }}</span>
                <!-- Button to edit user profile -->
                <a href="{{ route('user-edit', Auth::user()->id ?? 0) }}" class="btn btn-primary">Edit Profile</a>
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
                <input type="text" name="name" id="shelf-name">
                <button type="submit" class="btn" id="shelf-add_button">Add Shelf</button>            
            </div>
        </form>       

        {{--<span>{{ Bookshelf::where('user_id', Auth::user()->id)->get() }}</span>--}}

    </div>

</div>

<script type="text/javascript">
    function addCruz(bloque) {
        var cruz = document.createElement("span");
        cruz.className = "borra";
        cruz.innerHTML = '☒';
        bloque.appendChild(cruz);
        // add event listener to cruz
        cruz.addEventListener("click", function() {
            // remove shelf
            var padre = cruz.parentNode.parentNode;
            padre.parentNode.removeChild(padre);
        });
    }

    function addShelf() {
        var shelf_name = document.getElementById("shelf-name_button");
        if (shelf_name.value == "") {
            alert("Please enter a name for the shelf");
            return;
        }
        // * Start shelf *
        var newShelf = document.createElement("div");
        newShelf.className = "shelf shelf_"+shelf_name.value;    

        // ** Start shelf options **
        var newShelfOptions = document.createElement("div");
        newShelfOptions.className = "shelf_options";

        addCruz(newShelfOptions);

        var newShelfTitle = document.createElement("h3");
        newShelfTitle.className = "shelf_title";
        newShelfTitle.innerHTML = shelf_name.value;
        newShelfOptions.appendChild(newShelfTitle);

        newShelf.appendChild(newShelfOptions);
        // ** End shelf options **

        shelf_name.value = "";
        
        // ** Start shelf books **
        var newShelfBooks = document.createElement("div");
        newShelfBooks.className = "shelf_books";
        newShelfBooks.innerHTML = '<div class="shelf_item"> Uno </div> <div class="shelf_item"> Dos </div>';
        newShelf.appendChild(newShelfBooks);
        // ** End shelf books **       

        document.getElementById("bookshelves").appendChild(newShelf);
        // * End shelf *
    }

    document.getElementById("shelf-add_button").addEventListener("click", function() {
        console.log("add shelf");
        addShelf();
    });


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