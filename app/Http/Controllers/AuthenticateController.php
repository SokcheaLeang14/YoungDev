<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(){

        return view('users.login');

    }
    // 
    public function auth(Request $request){

        
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials)){
            return redirect()
                    ->intended('/users')
                    ->withSuccess('You have successfully logged in!!');
        }
        else{
            return redirect('/login')
                    ->withInput()
                    ->withErrors('Either your password nor username is incorrectt!!');
        }

    }
}
