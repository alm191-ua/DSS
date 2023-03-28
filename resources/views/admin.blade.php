@extends('layouts.app')

@section('title', 'Admin')

@section('content')

{{-- link styles --}}
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{-- link script --}}
<script src="{{ asset('js/admin.js') }}"></script>

<form name="form" method="get" action="">
    <input type="hidden" id="page_num" name="page_num" value="{{ $_GET['page_num'] ?? 0 }}">
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
    <a href="#" onclick="changeMain(7)">Settings</a>
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
            <a href="#" onclick="changeMain(7)">Settings</a>
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
</div>

<div class="main" name="books" hidden>
    <h2>Books Admin</h2>

    {{-- create book button --}}
    <a id="create_button" type="button" class="button btn-primary" href="{{ route('book-create') }}" ><i class="fa fa-plus"></i> {{ __('admin.create-book') }}</a> 
    
    {{-- Error messages --}}
    @if ($errors->any())
        <ul>
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
                    {{-- if ends with _id erase _id --}}
                    @if (substr($key, -3) == '_id')
                        @php
                            $key = substr($key, 0, -3);
                        @endphp
                    @endif
                    <th scope="col">
                        {{ $key }}
                        {{-- get number of column --}}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(1, {{ $i }})"></button>
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
                <form action={{ route('book-edit', $book->id) }} 
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
                        <img class="label-cell" src="{{ asset('storage_images/books/' . $book->image) }}" alt="book image" width="100px" height="135px">
                        {{-- relación de imágenes: 0.75 --}}
                        <img class="editable-form img_editable" hidden id="img_edit{{ $book->id }}" class="img_editable" src="{{ asset('storage_images/books/' . $book->image) }}" alt="book image" width="100px" height="100px">
                        <input name="image" type="file" hidden onchange="readImage(this, {{ $book->id }})" class="editable-form" id="image{{ $book->id }}" 
                        value="{{ $book->image }}" accept="image/*">
                        {{-- <input type="text" hidden class="editable-form" id="image{{ $book->id }}" value="{{ $book->image }}"> --}}
                    </td>
                    <td>
                        <div style="display: flex">
                            <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $book->id }})"><i class="fa fa-edit"></i></button>
                            <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                href="{{route('book-delete', $book->id)}}"><i class="fa fa-trash"></i></a>
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
    <h2>Authors Admin</h2>
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
                    {{-- if ends with _id erase _id --}}
                    @if (substr($key, -3) == '_id')
                        @php
                            $key = substr($key, 0, -3);
                        @endphp
                    @endif
                    <th scope="col">
                        {{ $key }}
                        {{-- get number of column --}}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(2, {{ $i }})"></button>
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
                    <td scope="row">{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ substr($author->info, 0, 50) . "..." }}</td>
                    {{-- <td>{{ $book->image }}</td> --}}
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $authors->appends(array('page_num' => 3, ))->links()
    }}
</div>

<div class="main" name="suggestions" hidden>
    <h2>Suggestions Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 1;
                // dd($suggestions);
            @endphp
            @if (count($suggestions) > 0)
                @foreach ($suggestions[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        @continue
                    @endif
                    {{-- if ends with _id erase _id --}}
                    @if (substr($key, -3) == '_id')
                        @php
                            $key = substr($key, 0, -3);
                        @endphp
                    @endif
                    <th scope="col">
                        {{ $key }}
                        {{-- get number of column --}}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(3, {{ $i }})"></button>
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
                    <td scope="row">{{ $suggestion->id }}</td>
                    <td>{{ $suggestion->email }}</td>
                    <td>{{ $suggestion->phone }}</td>
                    <td>{{ substr($suggestion->message, 0, 50) . "..." }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $suggestions->appends(array('page_num' => 4, ))->links()
    }}
</div>

<div class="main" name="users" hidden>
    <h2>Users Admin</h2>
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
                    {{-- if ends with _id erase _id --}}
                    @if (substr($key, -3) == '_id')
                        @php
                            $key = substr($key, 0, -3);
                        @endphp
                    @endif
                    <th scope="col">
                        {{ $key }}
                        {{-- get number of column --}}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(4, {{ $i }})"></button>
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
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td class="description-cell">{{ $book->description }}</td> --}}
                    <td>
                        <i class='fa fa-{{ $user->is_admin === true ? "unlock" : "lock" }}'></i>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $users->appends(array('page_num' => 5, ))->links()
    }}
</div>

<div class="main" name="categories" hidden>
    <h2>Categories Admin</h2>
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
                    {{-- if ends with _id erase _id --}}
                    @if (substr($key, -3) == '_id')
                        @php
                            $key = substr($key, 0, -3);
                        @endphp
                    @endif
                    <th scope="col">
                        {{ $key }}
                        {{-- get number of column --}}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(5, {{ $i }})"></button>
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
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->tag }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $users->appends(array('page_num' => 6, ))->links()
    }}
</div>

{{-- <div class="main" name="categories" hidden>
    <h2>Categories Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            @php 
                $i = 1;
            @endphp
            @if (count($categories) > 0)
                @foreach ($categories[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        <th scope="col" style="max-width: 30px;">
                            {{ $key }}
                            <button type="button" class="fa fa-sort btn-order" onclick="orderTable(5, {{ $i }}, true)"></button>
                            @php
                                $i++;
                            @endphp
                        </th>
                        @continue
                    @endif
                    <th scope="col">
                        {{ $key }}
                        <button type="button" class="fa fa-sort btn-order" onclick="orderTable(5, {{ $i }})"></button>
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
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->tag }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow()">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>

    {{
        $categories->appends(array('page_num' => 6, ))->links()
    }}
</div> --}}

<div class="main" name="settings" hidden>
    <h2>Settings</h2>
</div>

<script type="text/javascript">
    document.onload = init(view);
</script>

@endsection