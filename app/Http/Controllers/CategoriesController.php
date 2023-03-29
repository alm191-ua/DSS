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
        try {
            $category = Category::findOrfail($id);
            $category->update($request->all());
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }

    public function delete ($id)
    {
        try {
            $category = Category::findOrfail($id);
            $category->delete();
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }
}
