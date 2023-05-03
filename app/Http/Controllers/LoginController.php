<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        Log::info('Login attempt from: ' . $request->ip());
        $credentials = $request->getCredentials();

        // check if user exists in database
        $user_db = User::where('username', $credentials['username'])->firstorFail();

        if (!Hash::check($credentials['password'], $user_db->password)) {
            Log::info('Login failed from: ' . $request->ip());
            return redirect()->back()->with('error', 'Invalid username or password');
        }

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
