<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProfilWeb;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function halamanlogin()
    {
        $profil = ProfilWeb::all();
        return view('login.login-aplikasi',['profil' => $profil]);
    }

    public function postlogin(Request $request)
    {
   
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
  
            return redirect('/dashboard');
        }else{
        return redirect('/');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

