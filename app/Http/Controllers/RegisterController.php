<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('userRegist');
    }

    public function register(RegisterRequest $request)
    {
        $request->validated();
                
        $user = new User();

        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->is_admin = false;

        $user->save();
        auth()->login($user);

        $request_bookshelf = new Request();
        $request_bookshelf->merge(['name' => 'Favoritos']);

        app('App\Http\Controllers\BookshelfController')->store($request_bookshelf);

        return redirect()->route('login.show');
    }
}
