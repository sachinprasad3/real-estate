<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }



     public function showLoginForm()
     {
       return view('admin.login');
     }

     public function login(Request $request)
     {
         $this->validateLogin($request);

         if ($this->hasTooManyLoginAttempts($request)) {
             $this->fireLockoutEvent($request);

             return $this->sendLockoutResponse($request);
         }

         if ($this->attemptLogin($request)) {
             return $this->sendLoginResponse($request);
         }

         $this->incrementLoginAttempts($request);

         return $this->sendFailedLoginResponse($request);
     }

     //
     // public function __construct()
     // {
     //     $this->middleware('guest:admin')->except('logout');
     // }


     public function redirectToProvider()
    {
      return Socialite::driver('google')->redirect();
    }

    /**
    * Obtain the user information from GitHub.
    *
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback()
    {
      $user = Socialite::driver('google')->stateless()->user();

       return $user->name;
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

}
