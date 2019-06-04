<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest:admin');
//    }

    public function getLogin(){
      if(Auth::check()){
          if (Auth::user()->user_type == 1){
              return redirect()->route('admin.home');
          }else{
              return redirect()->route('admin.login');
          }
      }else{
          return view('admin.login');
      }
    }
    public function postLogin(Request $request){
        $this -> validate($request, [
            'email' => 'required | email',
            'password' => 'required | min:4'
        ]);
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'user_type' => 1,
        ])){
            return redirect()->intended(route('admin.home'));
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
