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
        position: absolute;
        z-index: 3;
        margin-right: 0%;
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
        color: white;
        margin-left: 5%; /* Same as the width of the sidenav */
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }

</style>

<div class="header-space">
    <h1 class="void-space"></h1>

</div>

<div class="sidenav">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  
  <div class="main">
    <h2 style="color: white;">Admin Page</h2>
    <p>This is the admin page.</p>
  </div>

@endsection