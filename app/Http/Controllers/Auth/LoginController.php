<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    const ADMIN_ROLE = 1;
    const BODEGA_ROLE = 2;
    const CLIENT_ROLE = 3;

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

    protected function authenticated(Request $request, $user)
    {
        switch ($user->rolUser->id) {
            case self::ADMIN_ROLE:
                return redirect()->intended('home');
                break;
            case self::BODEGA_ROLE:
                return redirect()->intended('bodega');
                break;
            case self::CLIENT_ROLE:
                return redirect()->intended('cliente');
                break;
        }
    }
}
