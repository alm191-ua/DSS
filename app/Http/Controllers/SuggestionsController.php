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
        try {
            $suggestion = Suggestion::findOrfail($id);
            $suggestion->update($request->all());
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $suggestion = Suggestion::findOrfail($id);
            $suggestion->delete();
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }
}
