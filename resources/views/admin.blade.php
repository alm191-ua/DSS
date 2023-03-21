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

</style>

<script language="javascript">
    // document.onload = initOrderButtons();


    function changeTable() {
        document.getElementById('table1').hidden = !document.getElementById('table1').hidden
        document.getElementById('table2').hidden = !document.getElementById('table2').hidden
    }

    function changeMain(main_num) {
        let mains = document.getElementsByClassName("main");
        for (let i = 0; i < mains.length; i++) {
            mains[i].hidden = true;
        }
        mains[main_num].hidden = false;
    }

    // function initOrderButtons() {
    //     const buttons = document.getElementsByClassName("btn-order");
    //     for (let button of buttons) {
    //         button.addEventListener("click", orderTable);
    //     }
    // }

    function orderTable(table_num, col) {
        let table, rows, switching, i, x, y, shouldSwitch;
        // get the table to order from the button pressed, target id 
        // table = document.getElementById(this.id.slice(0, -1));
        let tables = document.getElementsByClassName("table");
        table = tables[table_num]; //TODO: change to the table id generic
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                // console.log(id);
                x = rows[i].getElementsByTagName("TD")[col];
                y = rows[i + 1].getElementsByTagName("TD")[col];
                // Check if the two rows should switch place:
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
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
        let input = document.getElementById("searchBar").value;
        input = input.toLowerCase();
        // get table not hidden
        let tables = document.getElementsByClassName("table");
        let table;
        for (let i = 0; i < tables.length; i++) {
            if (!tables[i].hidden) {
                table = tables[i];
                break;
            }
        }
        // let table = document.getElementsByClassName("table")[table_num];
        let tr = table.getElementsByTagName("tr");
        for (let i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName("td");
            for (let j = 0; j < td.length; j++) {
                let txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
            
        }
    }
</script>

<div class="header-space">
    <h1 class="void-space"></h1>
</div>

<div class="sidenav">
    <a href="#" onclick="
        if (document.getElementsByClassName('main')[0].hidden){
            changeMain(0);
        }else{
            changeTable();
        }">Test Boards</a>
    <a href="#" onclick="changeMain(1)">Statistics</a>
    <a href="#" onclick="changeMain(2)">Books</a>
    <a href="#" onclick="changeMain(3)">Authors</a>
    <a href="#" onclick="changeMain(4)">Suggestions</a>
    <a href="#" onclick="changeMain(5)">Users</a>
    <a href="#" onclick="changeMain(6)">Categories</a>
    <a href="#" onclick="changeMain(7)">Settings</a>
</div>
  
<div class="main" id="test">
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

<div class="main" id="statistics" hidden>
    <p>This is a statistics test :D.</p>
</div>

<div class="main" id="books" hidden>
    <p>This is a books test :D.</p>
</div>

<div class="main" id="authors" hidden>
    <p>This is a authors test :D.</p>
</div>

<div class="main" id="suggestions" hidden>
    <p>This is a suggestions test :D.</p>
</div>

<div class="main" id="users" hidden>
    <p>This is a users test :D.</p>
</div>

<div class="main" id="categories" hidden>
    <p>This is a categories test :D.</p>
</div>

<div class="main" id="settings" hidden>
    <p>This is a settings test :D.</p>
</div>


@endsection