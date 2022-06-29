<?php
namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{

	public function __construct()
    {

        $this->middleware('auth:user');

    }

    public function index()
    {
    	$user = Auth::guard('user')->user();
    	return view('user.dashboard', compact('user'));
    }


    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect(url('user/login'));
    }


}