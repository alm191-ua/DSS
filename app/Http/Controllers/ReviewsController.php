<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function update(Request $request, $id)
    {
        try{
            $review = Review::findOrFail($id);
            $review->update($request->all());
            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }

    public function delete($id)
    {
        try{
            $review = Review::findOrFail($id);
            $review->delete();
            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->route('404');
        }
    }
}
