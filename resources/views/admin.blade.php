@extends('layouts.app')

@section('title', 'Admin')

@section('content')

{{-- link styles --}}
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
    <a href="#" onclick="changeMain(1)">{{__('admin.menu.statistics')}}</a>
    <a href="#" onclick="changeMain(2)">{{__('admin.menu.books')}}</a>
    <a href="#" onclick="changeMain(3)">{{__('admin.menu.authors')}}</a>
    <a href="#" onclick="changeMain(4)">{{__('admin.menu.suggestions')}}</a>
    <a href="#" onclick="changeMain(5)">{{__('admin.menu.users')}}</a>
    <a href="#" onclick="changeMain(6)">{{__('admin.menu.categories')}}</a>
    <a href="#" onclick="changeMain(7)">{{__('admin.menu.reviews')}}</a>
    <a href="#" onclick="changeMain(8)">{{__('admin.menu.newsletter')}}</a>
    <a href="/smart-ad-manager" target="_blank">{{__('admin.ads')}}</a>
    <a href="#" onclick="changeMain(9)">{{__('admin.menu.settings')}}</a>
</div>

<div id="responsive-sidenav" class="responsive-sidenav">
    <div class="dropdown">
        <button class="dropbtn" onclick="togglePagesLinks()">
            {{-- {{__('admin.pages')}} --}}
            <i class="fa fa-pagelines"></i>
        </button>
        <div hidden class="dropdown-content">
            {{-- <a href="#" onclick="
                if ($('#test-main').hidden){
                    changeMain(0);
                }else{
                    changeTable();
                }">Test Boards</a> --}}
            <a href="#" onclick="changeMain(1)">{{__('admin.menu.statistics')}}</a>
            <a href="#" onclick="changeMain(2)">{{__('admin.menu.books')}}</a>
            <a href="#" onclick="changeMain(3)">{{__('admin.menu.authors')}}</a>
            <a href="#" onclick="changeMain(4)">{{__('admin.menu.suggestions')}}</a>
            <a href="#" onclick="changeMain(5)">{{__('admin.menu.users')}}</a>
            <a href="#" onclick="changeMain(6)">{{__('admin.menu.categories')}}</a>
            <a href="#" onclick="changeMain(7)">{{__('admin.menu.reviews')}}</a>
            <a href="#" onclick="changeMain(8)">{{__('admin.menu.newsletter')}}</a>
            <a href="/smart-ad-manager" target="_blank">{{__('admin.ads')}}</a>
            <a href="#" onclick="changeMain(9)">{{__('admin.menu.settings')}}</a>
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

<div class="main" name="statistics" hidden>
    <h2>{{__('admin.menu.statistics')}}</h2>

    <div class="alert alert-warning" role="alert" style="max-width: 500px; margin-right: auto;">
        <h4 class="alert-heading">This feature is not available for now!</h4>
        <p>Sorry for the inconvenience, we are working on it.</p>
        <hr>
        <p class="mb-0">If you have any suggestion, please contact us.</p>

        <a href="{{ route('contactus') }}" class="btn btn-primary">Contact us</a>

    </div>
</div>

<div class="main" name="books">
    <h2>{{__('admin.menu.books')}}</h2>

    {{-- create book button --}}
    <div class="general-manage">
        <a id="create_button" type="button" class="button btn-primary" href="{{ route('book.create') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
        {{-- filter by --}}
        {{-- filter zone ocult --}}
        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="books_filter_by" class="filter-label">{{__('admin.filter_by')}}</label>
            <select name="books_filter_by" id="books_filter_by"
                onchange="showSelects(this.value);
                ">
                @foreach ($books_attributes as $key => $value)
                    @if ($key == 'image' || $key == 'file')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <select name="authors" id="authors" hidden>
                @foreach ($all_authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            <select name="categories" id="categories" hidden>
                @foreach ($all_categories as $category)
                    <option value="{{ $category->id }}">{{ $category->tag }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="books_filter_value" name="books_filter_value" placeholder=" Filter value">
            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    if ($('#books_filter_by').val() == 'author') {
                        $('#books_filter_value').val($('#authors').val());
                    } else if ($('#books_filter_by').val() == 'category') {
                        $('#books_filter_value').val($('#categories').val());
                    }
                    window.location.href = '{{ route('admin') }}?page_num=2&' +
                        'filter_books_by' + '=' + $('#books_filter_by').val() + 
                        '&filter_books_value' + '=' + $('#books_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 2]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#books_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        if ($('#books_filter_by').val() == 'author') {
                            $('#books_filter_value').val($('#authors').val());
                        } else if ($('#books_filter_by').val() == 'category') {
                            $('#books_filter_value').val($('#categories').val());
                        }
                        window.location.href = '{{ route('admin') }}?page_num=2&' +
                        'filter_books_by' + '=' + $('#books_filter_by').val() + 
                        '&filter_books_value' + '=' + $('#books_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>


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
                                href="
                                {{ request()->fullUrlWithQuery(['order_books' => $key, 'page_num' => 2]) }}
                                "></a>
                                {{-- {{ route('admin', ['page_num' => 2, 'order_books' => $key]) }} --}}
                        @endif
                        @php
                            $i++;
                        @endphp
                    </th>
                @endforeach
            
            @endif
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($books) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No books found!</h4>
                            <p>There are no books for this filter. You can create one by clicking the button above.</p>
                            <hr>
                            <p class="mb-0">If you think this is an error, please 
                                <a href="{{ route('contactus') }}">contact</a>
                                us.</p>
                        </div>
                    </td>
                </tr>
            @endif
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
                        <img class="label-cell" src="{{ asset('storage/books/' . $book->image) }}" 
                            onerror="this.src='{{ asset('images/default.png') }}'"
                            alt="book image" width="100px" height="135px">
                        {{-- relación de imágenes: 0.75 --}}
                        <img class="editable-form img_editable" hidden id="img_edit{{ $book->id }}" class="img_editable" src="{{ asset('storage/books/' . $book->image) }}" alt="book image" width="100px" height="135px">
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
    {{-- number of page and max pages of pagination --}}
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $books->currentPage() }}" 
            onchange="
            window.location.href = '{{ route('admin') }}?page_num=2&books=' + this.value;
            "> of {{ $books->lastPage() }}</p>

</div>


<div class="main" name="authors" hidden>
    <h2>{{ __('admin.menu.authors') }}</h2>

    {{-- create book button --}}
    <div class="general-manage">
        <a id="create_button" type="button" class="button btn-primary" href="{{ route('author.create') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 

        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="authors_filter_by" class="filter-label">{{__('admin.filter_by')}}</label>
            <select name="authors_filter_by" id="authors_filter_by">
                @foreach ($authors_attributes as $key => $value)
                    @if ($key == 'image')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="authors_filter_value" name="authors_filter_value" placeholder=" Filter value">
            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    window.location.href = '{{ route('admin') }}?page_num=3&' +
                        'filter_authors_by' + '=' + $('#authors_filter_by').val() + 
                        '&filter_authors_value' + '=' + $('#authors_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 3]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#authors_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        window.location.href = '{{ route('admin') }}?page_num=3&' +
                            'filter_authors_by' + '=' + $('#authors_filter_by').val() + 
                            '&filter_authors_value' + '=' + $('#authors_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>


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
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($authors) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No authors found!</h4>
                            <p>Try to create one.</p>
                            <hr>
                            <p class="mb-0">If you think this is an error, contact the administrator.</p>
                        </div>
                    </td>
                </tr>
            @endif
            
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
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $authors->currentPage() }}" 
        onchange="
        window.location.href = '{{ route('admin') }}?page_num=3&authors=' + this.value;
        "> of {{ $authors->lastPage() }}</p>
</div>

<div class="main" name="suggestions" hidden>
    <h2>{{__('admin.menu.suggestions')}}</h2>

    <div class="general-manage">
        {{-- create book button --}}
        <a id="create_button" type="button" class="button btn-primary" href="{{ route('contactus') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 
        
        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="suggestions_filter_by" class="filter-label">FILTER BY:</label>
            <select name="suggestions_filter_by" id="suggestions_filter_by">
                @foreach ($suggestions_attributes as $key => $value)
                    @if ($key == 'image')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="suggestions_filter_value" name="suggestions_filter_value" placeholder=" Filter value">
            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    window.location.href = '{{ route('admin') }}?page_num=4&' +
                        'filter_suggestions_by' + '=' + $('#suggestions_filter_by').val() + 
                        '&filter_suggestions_value' + '=' + $('#suggestions_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 4]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#suggestions_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        window.location.href = '{{ route('admin') }}?page_num=4&' +
                            'filter_suggestions_by' + '=' + $('#suggestions_filter_by').val() + 
                            '&filter_suggestions_value' + '=' + $('#suggestions_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>


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
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($suggestions) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No suggestions found!</h4>
                            <p>There are no suggestions in the database. You can create one by clicking the button above.</p>
                            <hr>
                            <p class="mb-0">If you think this is an error, please contact the administrator.</p>
                        </div>
                    </td>
                </tr>
            @endif
            
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
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $suggestions->currentPage() }}" 
        onchange="
        window.location.href = '{{ route('admin') }}?page_num=4&suggestions=' + this.value;
        "> of {{ $suggestions->lastPage() }}</p>
</div>

<div class="main" name="users" hidden>
    <h2>{{__('admin.menu.users')}}</h2>

    <div class="general-manage">
        {{-- create book button --}}
        {{-- <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a>  --}}
        
        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="users_filter_by" class="filter-label">{{__('admin.filter_by')}}</label>
            <select name="users_filter_by" id="users_filter_by"
                onchange="showSelectsUsers(this.value);
                ">
                @foreach ($users_attributes as $key => $value)
                    @if ($key == 'image')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="users_filter_value" name="users_filter_value" placeholder=" Filter value">
            <select name="users_filter_value_boolean" id="users_filter_value_boolean" hidden>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>

            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    if ($('#users_filter_by').val() == 'is_admin'){
                        $('#users_filter_value').val($('#users_filter_value_boolean').val());
                    }
                    window.location.href = '{{ route('admin') }}?page_num=5&' +
                        'filter_users_by' + '=' + $('#users_filter_by').val() + 
                        '&filter_users_value' + '=' + $('#users_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 5]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#users_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        if ($('#users_filter_by').val() == 'is_admin'){
                            $('#users_filter_value').val($('#users_filter_value_boolean').val());
                        }
                        window.location.href = '{{ route('admin') }}?page_num=5&' +
                            'filter_users_by' + '=' + $('#users_filter_by').val() + 
                            '&filter_users_value' + '=' + $('#users_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>



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
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($users) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No users found!</h4>
                            <p>There are no users in the database.</p>
                            <hr>
                            <p class="mb-0">You can create a new user by clicking the button above.</p>
                        </div>
                    </td>
                </tr>
            @endif
            
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
                                // alert('User is not admin. Trolled XD');
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
    
    {{ $users->appends(array('page_num' => 5, ))->links() }}
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $users->currentPage() }}" 
        onchange="
        window.location.href = '{{ route('admin') }}?page_num=5&users=' + this.value;
        "> of {{ $users->lastPage() }}</p>
</div>


<div class="main" name="categories" hidden>
    <h2>{{__('admin.menu.categories')}}</h2>

    <div class="general-manage">
        {{-- create book button --}}
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" hidden>
            @csrf
            <input type="text" class="form-control" name="tag" id="category_name_input">
            <button type="submit" id="store_category_btn" class="btn btn-primary">Submit</button>
        </form>
        <a id="create_button" type="button" class="button btn-primary" href="javascript:void(0)"
        onclick="
            let tag = window.prompt('Enter tag name');
            if (tag == null) {
                return;
            }
            $('#category_name_input').val(tag);
            $('#store_category_btn').click();
        " ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a> 


        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="categories_filter_by" class="filter-label">FILTER BY:</label>
            <select name="categories_filter_by" id="categories_filter_by">
                @foreach ($categories_attributes as $key => $value)
                    @if ($key == 'image')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="categories_filter_value" name="categories_filter_value" placeholder=" Filter value">
            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    window.location.href = '{{ route('admin') }}?page_num=6&' +
                        'filter_categories_by' + '=' + $('#categories_filter_by').val() + 
                        '&filter_categories_value' + '=' + $('#categories_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 6]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#categories_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        window.location.href = '{{ route('admin') }}?page_num=6&' +
                            'filter_categories_by' + '=' + $('#categories_filter_by').val() + 
                            '&filter_categories_value' + '=' + $('#categories_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>


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
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($categories) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            No categories found :(
                        </div>
                    </td>
                </tr>
            @endif
            
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
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $categories->currentPage() }}" 
        onchange="
        window.location.href = '{{ route('admin') }}?page_num=6&categories=' + this.value;
        "> of {{ $categories->lastPage() }}</p>
</div>

<div class="main" name="reviews" hidden>
    <h2>{{__('admin.menu.reviews')}}</h2>

    {{-- create book button --}}
    {{-- <a id="create_button" type="button" class="button btn-primary" href="{{ route('404') }}" ><i class="fa fa-plus"></i> {{ __('admin.create') }}</a>  --}}
    {{-- TODO: cambiar ruta 'author-create' --}}
    <div class="general-manage">
        <div class="filter-zone-ocult">
            <i class="fa fa-filter"></i>
        </div>
        <div class="filter-zone">
            <label for="reviews_filter_by" class="filter-label">{{__('admin.filter_by')}}</label>
            <select name="reviews_filter_by" id="reviews_filter_by">
                @foreach ($reviews_attributes as $key => $value)
                    @if ($key == 'image')
                        @continue
                    @endif
                    @if (substr($key, -3) == '_id')
                        {{ $key = substr($key, 0, -3) }}
                    @endif
                    <option value="{{ $key }}">{{ $key }}</option>
                @endforeach
            </select>
            <input type="text" class="filter_value" id="reviews_filter_value" name="reviews_filter_value" placeholder=" Filter value">
            <div class="buttons-zone">
                <button type="button" class="btn btn-secondary" onclick="
                    window.location.href = '{{ route('admin') }}?page_num=7&' +
                        'filter_reviews_by' + '=' + $('#reviews_filter_by').val() + 
                        '&filter_reviews_value' + '=' + $('#reviews_filter_value').val();
                ">
                <i class="fa fa-search"></i>
                </button>
                <div class="space-between-buttons"></div>
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('admin', ['page_num' => 7]) }}'">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <script type="text/javascript">
                // on enter activate button
                // add event listener to input
                var input = $('#reviews_filter_value');
                input.on('keyup', function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        window.location.href = '{{ route('admin') }}?page_num=7&' +
                            'filter_reviews_by' + '=' + $('#reviews_filter_by').val() + 
                            '&filter_reviews_value' + '=' + $('#reviews_filter_value').val();
                    }
                });
            </script>
        </div>
    </div>


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
            <th scope="col">{{__('admin.manage')}}</th>
          </tr>
        </thead>
        <tbody>
            @if (count($reviews) <= 0)
                {{-- no books message with cool bootstrap style --}}
                <tr>
                    <td colspan="100%">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">No reviews found!</h4>
                            <p>There are no reviews in the database.</p>
                            <hr>
                            <p class="mb-0">You can create a new review by clicking the button above.</p>
                        </div>
                    </td>
                </tr>
            @endif
            
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
    <p class="pagination_text">Page <input type="text" id="page_num" value="{{ $reviews->currentPage() }}" 
        onchange="
        window.location.href = '{{ route('admin') }}?page_num=7&reviews=' + this.value;
        "> of {{ $reviews->lastPage() }}</p>
</div>

<div class="main" name="newsletter" id="abc" hidden>
    <h2>{{__('admin.menu.newsletter')}}</h2>

    {{-- no available for now --}}
    {{-- <div class="alert alert-warning" role="alert" style="max-width: 500px; margin-right: auto;">
        <h4 class="alert-heading">No available for now!</h4>
        <p>Sorry for the inconvenience, we are working on it.</p>
        <hr>
        <p class="mb-0">If you have any suggestion, please contact us.</p>

        <a href="{{ route('contactus') }}" class="btn btn-primary">Contact us</a>
    </div> --}}

    <div class="panels-holder">
        <div class="panel-title active" id="nws">
            <a href="#" class="" id="newsletter-btn" 
                onclick="showNewsletterPanel(0)"
                ><h3>{{__('admin.newsletter.subscribers')}}</h3></a>
        
        </div>
        <div class="panel-title"id="sndm">
            <a href="#" class="" id="send-mail-btn" 
                onclick="showNewsletterPanel(1)"
                ><h3>{{__('admin.newsletter.send')}}</h3></a>
        </div>
    </div>
    <div class="content-holder">
        <div class="panel-content" id="newsletter-panel" hidden>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    @php 
                        $i = 1;
                    @endphp
                    @if (count($subscribers) > 0)
                        @foreach ($subscribers[0]->getAttributes() as $key => $value)
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
                                    href="{{ route('admin', ['page_num' => 8, 'order_subscribers' => $key]) }}"></a>
                                
                                @php
                                    $i++;
                                @endphp
                            </th>
                        @endforeach
                    
                    @endif
                    {{-- <th scope="col">Manage</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @if (count($subscribers) <= 0)
                        {{-- no books message with cool bootstrap style --}}
                        <tr>
                            <td colspan="100%">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">No subscribers found!</h4>
                                    <p>There are no subscribers in the database.</p>
                                    <hr>
                                    <p class="mb-0">You can subscribe in home page.</p>
                                </div>
                            </td>
                        </tr>
                    @endif
                    
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td scope="row">{{ $subscriber->id }}</td>
                            <td class="my-row">
                                {{-- email --}}
                                <label id="label{{ $subscriber->id }}" class="">{{ $subscriber->email }}</label>
                            </td>
                            {{-- <td>
                                <div style="display: flex">
                                    <button type="button" class="label-cell btn btn-primary" onclick="editMode({{ $subscriber->id }})"><i class="fa fa-edit"></i></button>
                                    <a class="label-cell btn btn-danger" onclick="return confirm('{{ __('admin.confirm') }}')" 
                                        href="{{route('subscriber.delete', $subscriber->id)}}"><i class="fa fa-trash"></i></a>
                                </div>
                            </td> --}}
                        </form>
                        </tr>
                    @endforeach
                  
                </tbody>
            </table>
            {{ $subscribers->appends(array('page_num' => 8, ))->links() }}
            <p class="pagination_text">Page <input type="text" id="page-num-newsletter" value="{{ $subscribers->currentPage() }}" 
                onchange="
                window.location.href = '{{ route('admin') }}?page_num=8&subscribers=' + this.value;
                "> of {{ $subscribers->lastPage() }}</p>

        </div>
        <div class="panel-content" id="send-mail-panel">
            @if ($errors->any())
                <ul class="validation-errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif
            <form action="{{ route('newsletter.send') }}" method="POST"> 
                @csrf
                <label for="subject">{{__('admin.newsletter.subject')}}</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
                <div class="options">
                    <label for="body" style="margin-right: 30px">{{__('admin.newsletter.body')}}</label>
                    <input type="checkbox" class="html-checkbox" onclick="showHtmlTemplates()" name="html" id="html" value="1">
                    <label for="html" style="margin-left: 0.3em;">{{__('admin.newsletter.templates')}}</label>
                    <select hidden class="html-select" id="HtmlTemplate" class="form-control" name="template"
                        onchange="setHtmlTemplate(this.value)">
                        <option value="" selected disabled>{{__('admin.newsletter.select_template')}}</option>
                        @foreach ($html_templates as $template)
                            <option value="{{ $template }}">{{ $template }}</option>
                        @endforeach
                    </select>
                </div>
                <textarea  name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
                <button type="submit" id="send-mail-btn" class="btn btn-primary"
                    onclick="
                        if ($('#html').is(':unchecked')) {
                            $('#HtmlTemplate').val('default');
                        }
                    "><i class="fa fa-paper-plane"></i>{{__('admin.newsletter.send_btn')}}</button>

            </form>
        </div>
    </div>

    {{-- <div class="panels-holder">
        <div class="panel">
            <div class="panel-title">
                <h3>Newsletter Subscribers</h3>
            </div>
            <div class="panel-content" hidden>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">
                <h3>Send mail</h3>
            </div>
            <div class="panel-content">
                <form action="" method="POST"> 
                    @csrf
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
    
                </form>
            </div>
        </div>
    </div> --}}
    
</div>

<div class="main" name="settings" hidden>
    <h2>{{__('admin.menu.settings')}}</h2>
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