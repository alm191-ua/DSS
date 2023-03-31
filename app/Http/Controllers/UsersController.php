<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            // 'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'password' => 'required',
        ]);
        try {
            $user = User::findOrfail($id);
            $user->update($request->all());
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $user = User::findOrfail($id);
            $user->delete();
        } catch (\Exception $e) {
            // do nothing
        }
        return redirect()->back();
    }
}
