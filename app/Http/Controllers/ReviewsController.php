<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Log;

class ReviewsController extends Controller
{

    public function store(Request $request,$id)
    {
       
        $request->validate([

            'message' => 'required|max:1500'
            
        ]);

        $review = new Review();
        $review->user_id=  Auth::user()->id;
        $review->book_id=  $id;
        $review->comment = $request->message;

        Log::info($review);
     
        $review->save();
        return redirect()->back();

    }

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
