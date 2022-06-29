<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
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
    protected $redirectTo = '/user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }


    public function checkLogin(Request $request)
    {
       $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // dd(Auth::guard('user')->user());
            $user = Auth::guard('user')->user();
            if ($user->login_status == 'Disabled')
            {
                Auth::guard('user')->logout();
                return redirect("/user/login")->with('error', 'Your account is Disabled');

            }
            return redirect()->intended('user/dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/user/login")->with('error', 'Oppes! You have entered invalid credentials');
    }


    public function create()
    {
        return view('auth.register');
    }

    public function save(Request $request)
    {


        $validator = \Validator::make($request->all(), [
        'email'=>'required|email|unique:users'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;        
        $user->password = \Hash::make($request->password);
        $user->login_status = 'Active';
        
        if ($user->save())
        {
            return redirect(url('user/register'))->with('success', 'Your registration successfully');
        }
        else
        {
            return redirect(url('user/register'))->with('error', 'Your registration failed!');
        }


    }


    protected function guard()
    {
        return Auth::guard('user');
    }
}


