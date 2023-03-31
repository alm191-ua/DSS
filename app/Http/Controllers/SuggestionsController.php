<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class SuggestionsController extends Controller
{
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
