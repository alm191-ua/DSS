<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
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

        Log::info('Registering user: ' . $request->username);
                
        $user = new User();

        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);

        $user->save();

        Log::info('User registered: ' . $user->username);

        auth()->login($user);

        return redirect()->route('login.show');
    }
}
