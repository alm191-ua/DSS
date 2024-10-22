<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['checked'],
            // 'password_confirmation' => 'required|same:password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {        
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin'=>false,
        ]);
        Log::info('User created: '.$user->username);

        $request_bookshelf = new Request();
        $request_bookshelf->merge(['name' => 'Favoritos']);
        // Auth user is not set yet, so we need to set it manually
        auth()->login($user);

        app('App\Http\Controllers\BookshelfController')->store($request_bookshelf);
        Log::info('Bookshelf ' .$request_bookshelf->name. ' created for user: '.$user->username);

        // send mail to user
        $subject = 'Bienvenido a WordWaves';
        $body = 'Hola';
        $template = 'register';

        $request_mail = new Request();
        $request_mail->merge(['email' => $user->email]);
        $request_mail->merge(['subject' => $subject]);
        $request_mail->merge(['body' => $body]);
        $request_mail->merge(['template' => $template]);
        app('App\Http\Controllers\MailController')->send($request_mail);

        return $user;
    }
}
