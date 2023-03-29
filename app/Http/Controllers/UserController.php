<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('userLogin');
    }
    public function register()
    {
        return view('userRegist');
    }
    public function profile()
    {
        return view('userProfile');
    }
    public function edit($id)
    {
        return view('userEdit');
    }
}
