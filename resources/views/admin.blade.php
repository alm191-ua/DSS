@extends('layouts.app')

@section('title', 'Admin')

@section('content')

{{-- link styles --}}
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{-- link script --}}
<script src="{{ asset('js/admin.js') }}"></script>

<form name="form" method="get" action="">
    <input type="hidden" id="page_num" name="page_num" value="{{ $_GET['page_num'] ?? 2 }}">
</form>

<div class="header-space">
    <h1 class="void-space"></h1>
</div>

<div class="sidenav">
    {{-- <a href="#" onclick="
        if ($('#test-main').hidden){
            changeMain(0);
        }else{
            changeTable();
        }">Test Boards</a> --}}
    <a href="#" onclick="changeMain(1)">Statistics</a>
    <a href="#" onclick="changeMain(2)">Books</a>
    <a href="#" onclick="changeMain(3)">Authors</a>
    <a href="#" onclick="changeMain(4)">Suggestions</a>
    <a href="#" onclick="changeMain(5)">Users</a>
    <a href="#" onclick="changeMain(6)">Categories</a>
    <a href="#" onclick="changeMain(7)">Reviews</a>
    <a href="#" onclick="changeMain(8)">Newsletter Subscriptors</a>
    <a href="#" onclick="changeMain(9)">Settings</a>
</div>

<div id="responsive-sidenav" class="responsive-sidenav">
    <div class="dropdown">
        <button class="dropbtn" onclick="togglePagesLinks()">Pages</button>
        <div hidden class="dropdown-content">
            {{-- <a href="#" onclick="
                if ($('#test-main').hidden){
                    changeMain(0);
                }else{
                    changeTable();
                }">Test Boards</a> --}}
            <a href="#" onclick="changeMain(1)">Statistics</a>
            <a href="#" onclick="changeMain(2)">Books</a>
            <a href="#" onclick="changeMain(3)">Authors</a>
            <a href="#" onclick="changeMain(4)">Suggestions</a>
            <a href="#" onclick="changeMain(5)">Users</a>
            <a href="#" onclick="changeMain(6)">Categories</a>
            <a href="#" onclick="changeMain(7)">Newsletter Subscriptors</a>
            <a href="#" onclick="changeMain(8)">Settings</a>
        </div>
    </div>
</div>
  
<div class="main" id="test-main" hidden>
    <h2 style="color: white;">Admin Page</h2>
    <p>This is a test for the admin page.</p>
    
    {{-- bar with multiple filter options --}}
    <div class="btn-group filter-bar" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary" data-selected="true">All</button>
        <button type="button" class="btn btn-secondary">Active</button>
        <button type="button" class="btn btn-secondary">Inactive</button>
        <button type="button" class="btn btn-secondary">Banned</button>
    </div>

    {{-- search bar to filter the table --}}
    <div class="input-group mb-3 filter-bar">
        <div class="input-group-prepend">
            <span class="input-group-text" style="color: white;" id="basic-addon1">Search</span>
        </div>
        <input type="text" id="searchBar" class="form-control" onkeyup="searchTable()" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        {{-- <button type="button" class="btn btn-secondary" onclick="searchTable()">Search</button> --}}
    </div>

    <table class="table table-striped table-dark" id="table1" hidden>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
    </table>
  
    <table class="table table-striped table-dark" id="table2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">
                hello
                <button type="button" class="fa fa-sort btn-order" id="btn1" onclick="orderTable(1, 1)"></button>
            </th>
            <th scope="col">
                Last
                <button type="button" class="fa fa-sort btn-order" id="btn2" onclick="orderTable(1, 2)"></button>
            </th>
            <th scope="col">
                Handle
                <button type="button" class="fa fa-sort btn-order" id="btn3" onclick="orderTable(1, 3)"></button>
            </th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Uwu</td>
            <td>Otto</td>
            <td>@mdo</td>
            {{-- create 2 buttons to edit and delete --}}
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
            </td>
          </tr>
        </tbody>
    </table>

</div>

<div class="main" name="statistics">
    <h2>Statistics</h2>

    {{-- not available for now with cool style--}}
    <div class="alert alert-warning" role="alert" style="max-width: 500px; margin-right: auto;">
        <h4 class="alert-heading">This feature is not available for now!</h4>
        <p>Sorry for the inconvenience, we are working on it.</p>
        <hr>
        <p class="mb-0">If you have any suggestion, please contact us.</p>

        <a href="{{ route('contactus') }}" class="btn btn-primary">Contact us</a>

    </div>
</div>

<div class="main" name="books" hidden>
    <h2>Books Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('book.create') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $books->appends(array('page_num' => 2, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($books) > 0)
                @foreach ($books[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        @if ($key != 'image' && $key != 'file')
                            <a type="button" class="fa fa-sort btn-order" 
                                href="{{ route('admin', ['page_num' => 2, 'order_books' => $key]) }}"></a>
                        @endif
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($books as $book)
                <tr>
                <form action={{ route('book.edit', $book->id) }} 
                    method="POST" id="form{{ $book->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $book->id }}</td>
                    <td>
                        {{-- label --}}
                        <label for="title{{ $book->id }}" id="label{{ $book->id }}" class="label-cell">{{ $book->title }}</label>
                        {{-- editable --}}
                        <input name="title" type="text" hidden class="editable-form" id="title{{ $book->id }}" value="{{ $book->title }}">
                    </td>
                    <td>
                        <label for="description{{ $book->id }}" id="label{{ $book->id }}" class="label-cell">{{ substr($book->description, 0, 50) . "..." }}</label>
                        <input name="description" type="text" hidden class="editable-form" id="description{{ $book->id }}" value="{{ $book->description }}">
                    </td>
                    <td>
                        <label for="author{{ $book->id }}" id="label{{ $book->id }}" class="label-cell">{{ $book->author->name }}</label>
                        {{-- desplegable con los autores --}}
                        <select name="author" id="author{{ $book->id }}" class="editable-form" hidden>
                            @foreach ($all_authors as $author)
                                @if ($author->id == $book->author->id)
                                    <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                                @else
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        {{-- <input type="text" hidden class="editable-form" id="author{{ $book->id }}" value="{{ $book->author->name }}"> --}}
                    </td>
                    <td>
                        <label for="category{{ $book->id }}" id="label{{ $book->id }}" class="label-cell">{{ $book->category->tag }}</label>
                        {{-- desplegable con las categorias --}}
                        <select name="category" id="category{{ $book->id }}" class="editable-form" hidden>
                            @foreach ($all_categories as $category)
                                @if ($category->id == $book->category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->tag }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->tag }}</option>
                                @endif
                            @endforeach
                        </select>    
                    </td>
                    <td>
                        <img class="label-cell" src="{{ asset('storage_images/books/' . $book->image) }}" 
                            onerror="this.src='{{ asset('images/default.png') }}'"
                            alt="book image" width="100px" height="135px">
                        {{-- relación de imágenes: 0.75 --}}
                        <img class="editable-form img_editable" hidden id="img_edit{{ $book->id }}" class="img_editable" src="{{ asset('storage_images/books/' . $book->image) }}" alt="book image" width="100px" height="135px">
                        <input name="image" type="file" hidden onchange="readImage(this, {{ $book->id }})" class="editable-form" id="image{{ $book->id }}" 
                        value="{{ $book->image }}" accept="image/*">
                        {{-- <input type="text" hidden class="editable-form" id="image{{ $book->id }}" value="{{ $book->image }}"> --}}
                    </td>
                    <td>
                        {{-- file --}}
                        <label for="file{{ $book->id }}" id="label{{ $book->id }}" class="">{{ substr($book->file, 0, 20) . "..." }}</label>
                        <input name="file" type="file" hidden class="editable-form" id="file{{ $book->id }}" value="{{ $book->file }}">
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $book->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('book.delete', $book->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $book->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $book->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $books->appends(array('page_num' => 2, ))->links() }}
</div>


<div class="main" name="authors" hidden>
    <h2>Authors Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('author.create') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    {{-- TODO: cambiar ruta 'author-create' --}}
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $authors->appends(array('page_num' => 3, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($authors) > 0)
                @foreach ($authors[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        @if ($key != 'image')
                            <a type="button" class="fa fa-sort btn-order" 
                                href="{{ route('admin', ['page_num' => 3, 'order_authors' => $key]) }}"></a>
                        @endif
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($authors as $author)
                <tr>
                <form action={{ route('author.edit', $author->id) }} 
                    method="POST" id="form{{ $author->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $author->id }}</td>
                    <td>
                        <label for="name{{ $author->id }}" id="label{{ $author->id }}" class="label-cell">{{ $author->name }}</label>
                        <input name="name" type="text" hidden class="editable-form" id="name{{ $author->id }}" value="{{ $author->name }}">
                    </td>
                    <td>
                        {{-- author info --}}
                        <label for="info{{ $author->id }}" id="label{{ $author->id }}" class="label-cell">{{ substr($author->info, 0, 20) . "..." }}</label>
                        <textarea name="info" hidden class="editable-form" id="info{{ $author->id }}" cols="30" rows="10" value="{{ $author->info }}">{{ $author->info }}</textarea>
                    </td>
                    <td>
                        <img class="label-cell user-img" src="{{ asset('storage/authors/' . $author->image) }}"
                            {{-- onerror="this.src='{{ asset('images/default.png') }}'" --}}
                            alt="author image" width="100px" height="100px">
                        {{-- relación de imágenes: 0.75 --}}
                        <img class="editable-form img_editable" hidden id="img_edit{{ $author->id }}" class="img_editable" src="{{ asset('storage/authors/' . $author->image) }}" alt="book image" width="100px" height="135px">
                        <input name="image" type="file" hidden onchange="readImage(this, {{ $author->id }})" class="editable-form" id="image{{ $author->id }}" 
                        value="{{ $author->image }}" accept="image/*">
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $author->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('author.delete', $author->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $author->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $author->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $authors->appends(array('page_num' => 3, ))->links() }}
</div>

<div class="main" name="suggestions" hidden>
    <h2>Suggestions Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    {{-- TODO: cambiar ruta 'author-create' --}}
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $suggestions->appends(array('page_num' => 4, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($suggestions) > 0)
                @foreach ($suggestions[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        <a type="button" class="fa fa-sort btn-order" 
                            href="{{ route('admin', ['page_num' => 4, 'order_suggestions' => $key]) }}"></a>
                            
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($suggestions as $suggestion)
                <tr>
                <form action={{ route('suggestion.edit', $suggestion->id) }} 
                    method="POST" id="form{{ $suggestion->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $suggestion->id }}</td>
                    <td>
                        {{-- email --}}
                        <label for="email{{ $suggestion->id }}" id="label{{ $suggestion->id }}" class="label-cell">{{ $suggestion->email }}</label>
                        <input name="email" type="text" hidden class="editable-form" id="email{{ $suggestion->id }}" value="{{ $suggestion->email }}">
                    </td>
                    <td>
                        {{-- phone --}}
                        <label for="phone{{ $suggestion->id }}" id="label{{ $suggestion->id }}" class="label-cell">{{ $suggestion->phone }}</label>
                        <input name="phone" type="text" hidden class="editable-form" id="phone{{ $suggestion->id }}" value="{{ $suggestion->phone }}">
                    </td>
                    <td>
                        {{-- message --}}
                        <label for="message{{ $suggestion->id }}" id="label{{ $suggestion->id }}" class="label-cell">{{ $suggestion->message }}</label>
                        <textarea name="message" type="text" hidden class="editable-form" id="message{{ $suggestion->id }}" value="{{ $suggestion->message }}">{{ $suggestion->message }}</textarea>
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $suggestion->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('suggestion.delete', $suggestion->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $suggestion->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $suggestion->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $suggestions->appends(array('page_num' => 4, ))->links() }}
</div>

<div class="main" name="users" hidden>
    <h2>Users Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    {{-- TODO: cambiar ruta 'author-create' --}}
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $users->appends(array('page_num' => 5, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($users) > 0)
                @foreach ($users[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        @if ($key != 'image')
                            <a type="button" class="fa fa-sort btn-order" 
                                href="{{ route('admin', ['page_num' => 5, 'order_users' => $key]) }}"></a>
                        @endif
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($users as $user)
                <tr>
                <form action={{ route('user.edit', $user->id) }} 
                    method="POST" id="form{{ $user->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $user->id }}</td>
                    <td>
                        {{-- username --}}
                        <label for="username{{ $user->id }}" id="label{{ $user->id }}" class="label-cell">{{ $user->username }}</label>
                        <input name="username" type="text" hidden class="editable-form" id="username{{ $user->id }}" value="{{ $user->username }}">
                    </td>
                    <td>
                        {{-- email --}}
                        <label for="email{{ $user->id }}" id="label{{ $user->id }}" class="label-cell">{{ $user->email }}</label>
                        <input name="email" type="text" hidden class="editable-form" id="email{{ $user->id }}" value="{{ $user->email }}">
                    </td>
                    <td>
                        {{-- is_admin --}}
                        <i onclick="
                            if (this.classList.contains('fa-lock')) {
                                this.classList.remove('fa-lock');
                                this.classList.add('fa-unlock');
                                alert('User is not admin. Trolled XD');
                            } else {
                                this.classList.remove('fa-unlock');
                                this.classList.add('fa-lock');
                            }
                            " class='fa fa-{{ $user->is_admin === true ? "unlock" : "lock" }}'></i>
                    </td>
                    <td>
                        {{-- image --}}
                        <img src="{{ asset('storage/users/' . $user->image) }}" class="label-cell user-img" alt="user image" width="50px" height="50px">
                        <input name="image" type="file" hidden class="editable-form" id="image{{ $user->id }}" value="{{ $user->image }}">
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $user->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('user.delete', $user->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $user->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $user->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $suggestions->appends(array('page_num' => 5, ))->links() }}
</div>


<div class="main" name="categories" hidden>
    <h2>Categories Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    {{-- TODO: cambiar ruta 'author-create' --}}
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $categories->appends(array('page_num' => 6, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($categories) > 0)
                @foreach ($categories[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        @if ($key != 'image')
                            <a type="button" class="fa fa-sort btn-order" 
                                href="{{ route('admin', ['page_num' => 6, 'order_categories' => $key]) }}"></a>
                        @endif
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($categories as $category)
                <tr>
                <form action={{ route('category.edit', $category->id) }} 
                    method="POST" id="form{{ $category->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $category->id }}</td>
                    <td>
                        {{-- tag --}}
                        <label for="tag{{ $category->id }}" id="label{{ $category->id }}" class="label-cell">{{ $category->tag }}</label>
                        <input name="tag" type="text" hidden class="editable-form" id="tag{{ $category->id }}" value="{{ $category->tag }}">
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $category->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('category.delete', $category->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $category->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $category->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $categories->appends(array('page_num' => 6, ))->links() }}
</div>

<div class="main" name="reviews" hidden>
    <h2>Reviews Admin Panel</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
    {{-- TODO: cambiar ruta 'author-create' --}}
    {{-- Error messages --}}
    @if ($errors->any())
        <ul class="validation-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif
    
    <div class="responsive-pagination">
        {{ $reviews->appends(array('page_num' => 7, ))->links() }}
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
            @endphp
            @if (count($reviews) > 0)
                @foreach ($reviews[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    <th scope="col">
                        {{-- if ends with _id erase _id --}}
                        @if (substr($key, -3) == '_id')
                            {{substr($key, 0, -3);}}
                        @else
                            {{$key}}
                        @endif
                        <a type="button" class="fa fa-sort btn-order" 
                            href="{{ route('admin', ['page_num' => 7, 'order_reviews' => $key]) }}"></a>
                        
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($reviews as $review)
                <tr>
                <form action={{ route('review.edit', $review->id) }} 
                    method="POST" id="form{{ $review->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <td scope="row">{{ $review->id }}</td>
                    <td>
                        {{-- comment --}}
                        <label for="comment{{ $review->id }}" id="label{{ $review->id }}" class="label-cell">{{ $review->comment }}</label>
                        <input name="comment" type="text" hidden class="editable-form" id="comment{{ $review->id }}" value="{{ $review->comment }}">
                    </td>
                    <td>
                        {{-- user --}}
                        <label for="user{{ $review->id }}" id="label{{ $review->id }}" class="">{{ $review->user->username }}</label>
                    </td>
                    <td>
                        {{-- book --}}
                        <label for="book{{ $review->id }}" id="label{{ $review->id }}" class="">
                            <a href="{{ route('book', $review->book->id) }}">
                                {{ $review->book->title }}
                            </a>
                        </label>
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $review->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('review.delete', $review->id)}}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div style="display: inline-flex">
                            <button type="submit" class="editable-form btn btn-success" onmouseup="editMode({{ $review->id }})">
                                <i class="fa fa-check"></i>
                            <button type="button" class="editable-form btn btn-danger" onclick="editMode({{ $review->id }})">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    
    {{ $reviews->appends(array('page_num' => 7, ))->links() }}
</div>

<div class="main" name="newsletter-subsciptors" hidden>
    <h2>Newsletter Subsciptors Admin Panel</h2>

    {{-- no available for now --}}
    <div class="alert alert-warning" role="alert" style="max-width: 500px; margin-right: auto;">
        <h4 class="alert-heading">No available for now!</h4>
        <p>Sorry for the inconvenience, we are working on it.</p>
        <hr>
        <p class="mb-0">If you have any suggestion, please contact us.</p>

        <a href="{{ route('contactus') }}" class="btn btn-primary">Contact us</a>
    </div>
    
</div>

<div class="main" name="settings" hidden>
    <h2>Settings Panel</h2>
    <p>Here you can change the settings of the website</p>
    {{-- no settings available for now message with cool style--}}
    <div class="alert alert-warning" role="alert" style="max-width: 500px; margin-right: auto;">
        <h4 class="alert-heading">No settings available for now!</h4>
        <p>Sorry for the inconvenience, we are working on it.</p>
        <hr>
        <p class="mb-0">If you have any suggestion, please contact us.</p>

        <a href="{{ route('contactus') }}" class="btn btn-primary">Contact us</a>

    </div>

</div>

<script type="text/javascript">
    document.onload = init(view);
</script>

@endsection