<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    //for user redirect to user view
    protected function redirectTo(){
        
        //admin login
        if( Auth::user()->is_admin == '1')
        {
            return ('admin');
        }
        //computer admin login
        elseif( Auth::user()->is_admin == '2')
        {
            return ('comadmin');
        }

        //physics admin login
        elseif( Auth::user()->is_admin == '3')
        {
            return ('phyadmin');
        }

         //chemistry admin login
        elseif( Auth::user()->is_admin == '4')
         {
             return ('cheadmin');
         }

        //normal user login
        else
        {
            return ('userindex');
        }

        //else
        //{
        //return ('userindex');
        //}
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
