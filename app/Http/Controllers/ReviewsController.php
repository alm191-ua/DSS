<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->back();
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back();
    }
}
