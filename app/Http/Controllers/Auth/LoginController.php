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
    const VENDEDOR_ROLE = 2;
    const BODEGA_ROLE = 3;

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
        // dd($user->rolUser->id);
        switch ($user->rolUser->id) {
            case self::ADMIN_ROLE:
                return redirect()->intended('home');
                break;
            case self::VENDEDOR_ROLE:
                return redirect()->intended('vendedor');
                break;
            case self::BODEGA_ROLE:
                return redirect()->intended('bodega');
                break;
        }
    }
}
