@extends('layouts.app')

@section('title', 'Admin')

@section('content')

<style>
    .header-space {
    }

    .void-space {
        text-align: center;
        height: 3em;
        opacity: 0;
    }
    
    header {
        /* position: fixed; */
        /* margin-left: 15%; */
        /* padding-left: 15%; */
        /* padding-right: 15%; */
        /* width: 100%; */
    }

    .logo {
        position: fixed;
    }

    .copyrights {
        position: sticky;
        z-index: 3;
        margin: 0;
        /* margin-top: 2.5em; */
        padding-left: 2%;
        /* margin-top: auto; */
    }

    body {
        background-color: #253341;
        margin-left: 15%;
    }

    /* ---------- */
    .sidenav {
        /* margin-top: 10%; */
        height: 100%;
        width: 17%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 10%;
    }

    .sidenav a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .main {
        min-height: 29.8em;
        color: white;
        margin-left: 5%; /* Same as the width of the sidenav */
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }

    tr:nth-child(even){
        background-color: #394756;
    }

    tr:nth-child(odd){
        /* background-color: red; */
    }

    .btn-order {
        background-color: #394756;
        color: white;
        border: none;
        padding: 2px;
        padding-left: 4px;
        padding-right: 4px;
        margin: 2px;
        margin-left: 15px;
    }

    .btn {
        height: 25px;
        font-size: 12px;
        text-align: center;
    }

    .filter-bar {
        margin-top: 1em;
        margin-bottom: 1em;
        color : black;
    }

    th {
        /* min-width: 10em; */
        white-space: nowrap;
    }

    td {
        max-width: 15em;
        word-wrap: break-word;
    }

    table {
        width: 100%;
        max-width: 800px;
        overflow-x: auto;
        border-collapse: collapse;
    }

    h2 {
        color: white;
    }

    /* @media (max-width: 800px) {
        th, td {
            display: block;
            width: 100%;
        }
    } */

</style>

@php
    // $page_num = $_GET['page_num'] ?? 0;
    $_SESSION['page_num'] = $_GET['page_num'] ?? 0;
@endphp

<form name="form" method="get" action="">
    <input type="hidden" id="page_num" name="page_num" value="{{ $_SESSION['page_num'] }}">
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script language="javascript">
    document.onload = console.log('loaded');
    var view;

    function firstPage(view) {
        view = document.getElementById('page_num').value;
        console.log(view);
        changeMain(view);
    }

    function changeTable() {
        $('#table1').toggle();
        $('#table2').toggle();
    }

    function changeMain(main_num) {
        let mains = $('.main');
        for (let i = 0; i < mains.length; i++) {
            $(mains[i]).hide();
            console.log(mains[i]);
            view = main_num;
            $('#page_num').val(main_num);

        }
        $(mains[main_num]).show();
    }

    // function initOrderButtons() {
    //     const buttons = document.getElementsByClassName("btn-order");
    //     for (let button of buttons) {
    //         button.addEventListener("click", orderTable);
    //     }
    // }

    function orderTable(table_num, col, are_numbers = false) {
        console.log(table_num, col);
        let table, rows, switching, i, x, y, shouldSwitch;
        // get the table to order from the button pressed, target id 
        // table = document.getElementById(this.id.slice(0, -1));
        let main = $('.main')[view];
        let tables = $(main).find('table');
        // console.log(tables);
        table = tables; //$(tables[table_num]);
        // console.log(table);
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            // rows = table.rows;
            rows = $(table).find('tbody tr');
            // console.log(table.rows);
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 0; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                // console.log(id);
                x = $(rows[i]).find('td')[col];
                y = $(rows[i + 1]).find('td')[col];
                // Check if the two rows should switch place:
                if (are_numbers) {
                    if (Number(x.innerHTML) > Number(y.innerHTML)) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    // sync the searcg bar with the table
    function searchTable() {
        // get the value of the search bar
        let input = $('#searchBar').val();
        input = input.toLowerCase();
        // get table not hidden
        let main = $('.main')[view];
        let tables = $(main).find('.table');
        let table;
        for (let i = 0; i < tables.length; i++) {
            if (!tables[i].hidden) {
                table = tables[i];
                break;
            }
        }
        // let table = document.getElementsByClassName("table")[table_num];
        // use jquery to get the table
        let tr = $(table).find('tr');
        for (let i = 0; i < tr.length; i++) {
            let td = $(tr[i]).find('td');
            for (let j = 0; j < td.length; j++) {
                let txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(input) > -1) {
                    $(tr[i]).show();
                    break;
                } else {
                    $(tr[i]).hide();
                }
            }
            
        }
    }
</script>

{{-- @php
    echo '<script>changeMain(' . $page_num . ');</script>';
@endphp --}}

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
                <button type="button" class="fa fa-sort btn-order" id="btn1" onclick="orderTable(1, 0)"></button>
            </th>
            <th scope="col">
                Last
                <button type="button" class="fa fa-sort btn-order" id="btn2" onclick="orderTable(1, 1)"></button>
            </th>
            <th scope="col">
                Handle
                <button type="button" class="fa fa-sort btn-order" id="btn3" onclick="orderTable(1, 2)"></button>
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
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
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
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 0;
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
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ substr($book->description, 0, 50) . "..." }}</td>
                    {{-- <td class="description-cell">{{ $book->description }}</td> --}}
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->category->tag }}</td>
                    <td>{{ $book->image }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{-- {{echo: $_GET['page_num'];}}  --}}
    {{         
        $books->appends(array('page_num' => 2, request()->except('page_num', 'books')))->links()
    }}
</div>

<div class="main" name="authors" hidden>
    <h2>Authors Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 0;
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
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ substr($author->info, 0, 50) . "..." }}</td>
                    {{-- <td>{{ $book->image }}</td> --}}
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $authors->appends(array('page_num' => 3, request()->except('page_num', 'authors')))->links()
    }}
</div>

<div class="main" name="suggestions" hidden>
    <h2>Suggestions Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 0;
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
                    <th scope="row">{{ $suggestion->id }}</th>
                    <td>{{ $suggestion->email }}</td>
                    <td>{{ $suggestion->phone }}</td>
                    <td>{{ substr($suggestion->message, 0, 50) . "..." }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $suggestions->appends(array('page_num' => 4, request()->except('page_num', 'suggestions')))->links()
    }}
</div>

<div class="main" name="users" hidden>
    <h2>Users Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            @php 
                $i = 0;
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
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td class="description-cell">{{ $book->description }}</td> --}}
                    <td>{{ 
                        $user->is_admin == 1 ? "Admin" : "User" 
                    }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{         
        $users->appends(array('page_num' => 5, request()->except('page_num', 'users')))->links()
    }}
</div>

<div class="main" name="categories" hidden>
    <h2>Categories Admin</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            {{-- <th scope="col">#</th> --}}
            @php 
                $i = 0;
            @endphp
            @if (count($categories) > 0)
                @foreach ($categories[0]->getAttributes() as $key => $value)
                    @if ($key == 'id') 
                        <th scope="col" style="max-width: 30px;">
                            {{ $key }}
                            {{-- get number of column --}}
                            <button type="button" class="fa fa-sort btn-order" onclick="orderTable(5, {{ $i }}, true)"></button>
                            @php
                                $i++;
                            @endphp
                        </th>
                        @continue
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
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    {{-- <script>
        console.log("{{ Request::capture()->except('page') }}");
        
    </script> --}}
    {{
        // $my_dict = array('page_num' => 6);
        // foreach (Request::capture()->except('page') as $key => $value) {
        //     $my_dict[$key] = $value;
        // }
        // $categories->appends(my_dict)->links()
        $categories->appends(array('page_num' => 6, request()->except('page_num', 'categories')))->links()
    }}
</div>

<div class="main" name="settings" hidden>
    <h2>Settings</h2>
</div>

<script type="text/javascript">
    document.onload = firstPage(view);
</script>

@endsection