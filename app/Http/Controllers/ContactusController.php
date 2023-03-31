<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactusController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('contactus', compact('categories'));
    }
}