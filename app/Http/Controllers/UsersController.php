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
            // 'password' => 'required',
        ]);

        $user = User::findOrfail($id);        
        if (!Auth::user()->is_admin) {
            $request->validate([
                'password' => 'required',
            ]);
            // check password match or not 
            if (!Hash::check($request->password, $user->password)) {
                Log::info('Password is incorrect');
                return redirect()->back()->with('error', 'Password is incorrect');
            } 
            $request->merge(['password' => Hash::make($request->password)]);
            $user->update($request->all());
        }else{
            $user->update($request->except('password'));
        }


        if (Auth::user()->is_admin) {
            return redirect()->route('admin',['page_num'=>5]);
        }

        return redirect()->route('profile');
    }

    public function delete($id)
    {
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->back();
    }
}
