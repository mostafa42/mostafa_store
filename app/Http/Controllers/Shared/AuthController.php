<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.welcome');
    }

    public function login_page()
    {
        return view('user.login');
    }

    public function sign_in(Request $request)
    {
        $credentials = $request->all('email' , 'password');

        if( !Auth::validate($credentials) ){
            return redirect()->back()->withErrors(["errors" => "invalid credentials"]);
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        if( $user->type == "super_admin" ){
            return redirect('/acp') ;
        }
    }

    public function signup_page()
    {
        return view('user.sign_up');
    }

    public function register(SignUpRequest $request)
    {
        $inputs = $request->all();
        $inputs["type"] = "user" ;
        $user = User::create($inputs);
        auth()->login($user);

        // return auth()->user() ;
        return redirect('login') ;
    }
}
