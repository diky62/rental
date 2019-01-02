<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\model\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Alert;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){
    return view('auth.login');
}

public function doLogin(Request $request){
    $this->validate($request, [
        'email'     => 'required|email',
        'password'  => 'required|min:3'
    ]);

    $data =  array(
        'email'     => $request->get('email'),
        'password'  => $request->get('password')
         );

if (Auth::guard()->attempt($data))
        {
            return redirect()->route('home1')->with('alert',  'Login Success');
        }
        else
        {
            return back()->with('errors', 'Wrong login details');
        }
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->flush();

        return redirect('/login');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
