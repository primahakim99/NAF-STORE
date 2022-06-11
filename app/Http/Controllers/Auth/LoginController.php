<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function findUsername()
    {
        $login = request()->input('login');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        request()->merge([$fieldType => $login]);
        return $fieldType;
    }

    protected function redirectTo()
    {
        if(Auth::user()->role_as == 'admin') 
        {
            return redirect('/admin');
        }
        elseif(Auth::user()->role_as == 'owner')
        {
            return redirect('/owner');
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);
        $errors = new MessageBag;
        $this->username = $this->findUsername();
        if (Auth::attempt(array($this->username => $input['login'], 'password' => $input['password']))) {

            return $this->redirectTo();
        } else {
            $errors = new MessageBag(['WrongCredentials' => ['These credentials do not match our records.']]);
            return Redirect::back()->withErrors($errors);
        }
    }
    // public function showLoginForm()
    // {
    //     return view('auth.login', [
    //         "title" => "NAF-STORE"
    //     ]);
    // }
}
