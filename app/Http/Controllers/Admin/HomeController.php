<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function userLists()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.home', compact('users'));
    }

    public function userStatusChange($id, $status)
    {
        $user = User::where('id', $id)->first();
        $user->login_status = $status;

         if ($user->save())
         {
            return redirect('admin/user-lists')->with('success', 'User status changed successfully');
         }
         else
         {
            return redirect('admin/user-lists')->with('error', 'User status changed failed!');
         }
       

    }

   
}