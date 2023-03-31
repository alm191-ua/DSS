<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PgSql\Lob;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function showProfile()
    {
        $bookshelves = Auth::user()->bookshelves;
        return view('userProfile', ['bookshelves' => $bookshelves]);
    }
    public function showEdit($id)
    {
        return view('userEdit', ['user' => User::findOrfail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            // 'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required',
        ]);
        try {
            $user = User::findOrfail($id);        
            
            // check password match or not 
            if (!Hash::check($request->password, $user->password)) {
                Log::info('Password is incorrect');
                return redirect()->back()->with('error', 'Password is incorrect');
            } 
            $request->merge(['password' => Hash::make($request->password)]);
            $user->update($request->all());
        } catch (\Exception $e) {
            // do nothing
        }

        if (Auth::user()->is_admin) {
            return redirect()->route('admin',['page_num'=>5]);
        }

        return redirect()->route('profile');
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
