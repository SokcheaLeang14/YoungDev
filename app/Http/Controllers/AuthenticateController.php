<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
  public function login()
  {
    return view('users.login');
  }
  // check login request
  public function auth(Request $request)
  {

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()
        ->intended('/home')
        ->withSuccess('You have successfully logged in!!');
    } else {
      return redirect('/')
        ->withInput()
        ->withErrors('Either your password nor username is incorrectt!!');
    }
  }

  // logout
  public function logout(Request $request)
  {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
  }
}
