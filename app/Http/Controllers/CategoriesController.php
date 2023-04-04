<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function update (Request $request, $id)
    {
        $request->validate([
            'tag' => 'required|max:255',
        ]);

        $category = Category::findOrfail($id);
        $category->update($request->all());
        return redirect()->back();
    }

    public function delete ($id)
    {
        $category = Category::findOrfail($id);
        $category->delete();
        return redirect()->back();
    }

    public function store (Request $request)
    {
        $request->validate([
            'tag' => 'required|max:255',
        ]);

        $category = new Category();
        $category->tag = $request->tag;
        $category->save();
        return redirect()->back();
    }
}
