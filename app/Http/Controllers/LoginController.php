<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('userLogin');
    }

        /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        Log::info('Credentials: ' . json_encode($credentials));

        // Obtain user from database
        $user = User::where('username', $credentials['username'])->first();
        Log::info('User: ' . json_encode($user));

        // Log user password
        Log::info('User password: ' . $user->password);
        Log::info('Credentials password: ' . $credentials['password']);
        Log::info('Password hashed credentials: ' . password_hash($credentials['password'], PASSWORD_DEFAULT));

        // TODO: passwords not matching

        // // Check if user exists and password is correct
        // if (!$user || !password_verify($credentials['password'], $user->password)) {
        //     Log::info('Login failed from: ' . $request->ip());
        //     return redirect()->back()->with('error', 'Invalid username or password');
        // }

        // Log::info('Login successful from: ' . $request->ip());

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}
