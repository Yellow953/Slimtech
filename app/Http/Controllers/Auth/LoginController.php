<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect('/app');
        } else {
            return redirect()->intended('/');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}