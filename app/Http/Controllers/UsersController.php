<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PgSql\Lob;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

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
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->phone) {
            $user->phone = $request->phone;
        }
        
        if ($request->hasFile('image')) {
            // delete old image
            File::delete(storage_path('app/public/users/'.$user->image));

            // save new image
            $image = $request->image;
            $imageName = time().$image->getClientOriginalName();
            $image->move(storage_path('app/public/users'), $imageName);
            $user->image = $imageName;
        }

        if (!Auth::user()->is_admin) {
            $request->validate([
                'password' => 'required',
            ]);
            // check password match or not 
            if (!Hash::check($request->password, $user->password)) {
                Log::info('Password is incorrect');
                return redirect()->back()->with('error', 'Password is incorrect');
            } 
            $user->password = Hash::make($request->password);
            // $request->merge(['password' => Hash::make($request->password)]);
            // $user->update($request->all());
        }
        // else{
        //     $user->update($request->except('password'));
        // }
        $user->save();

        if (Auth::user()->is_admin) {
            return redirect()->route('admin',['page_num'=>5]);
        }

        return redirect()->route('profile');
    }

    public function delete($id)
    {
        $user = User::findOrfail($id);
        // delete image
        File::delete(storage_path('app/public/users/'.$user->image));
        $user->delete();
        return redirect()->back();
    }
}
