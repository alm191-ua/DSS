<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $bookshelves = Auth::user()->bookshelves;
        return view('userProfile', ['bookshelves' => $bookshelves]);
    }
    public function showEdit($id)
    {
        return view('userEdit');
    }
}
