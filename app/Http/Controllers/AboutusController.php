<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AboutusController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('aboutus', compact('categories'));
    }
}