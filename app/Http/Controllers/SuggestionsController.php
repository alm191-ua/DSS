<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;
use Illuminate\Support\Facades\Log;

class SuggestionsController extends Controller
{

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:1500',
            'phone' => 'max:1500',
            'message' => 'required|max:1500'
            
        ]);

        $suggestion = new Suggestion();
        $suggestion->name = $request->name;
        $suggestion->email = $request->email;
        $suggestion->phone = $request->phone;
        $suggestion->message = $request->message;

        Log::info($suggestion);
     
        $suggestion->save();
        return redirect()->back();

    }
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|max:1200',
        ]);

        $suggestion = Suggestion::findOrfail($id);
        $suggestion->update($request->all());
        return redirect()->back();
    }

    public function delete($id)
    {
        $suggestion = Suggestion::findOrfail($id);
        $suggestion->delete();
        return redirect()->back();
    }
}
