<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function getActiveUsers(){
    $admin = DB::table('users')->where('user_type', '=', 1)->get();
      $activeUsers = DB::select('SELECT u.id, u.first_name, u.last_name, u.email,
        u.user_type, ud.photo, ud.phone, ud.address
        FROM users u INNER JOIN user_details ud ON ud.user_id = u.id
        WHERE u.user_type IN (2, 3)
        AND u.activation = 1
        AND u.status = 1');
      return view('admin.user.activeusers', ['activeUsers' => $activeUsers, 'admin' => $admin]);
  }

  public function getNewUsers(){
    $admin = DB::table('users')->where('user_type', '=', 1)->get();
      $newUsers = DB::select('SELECT u.id, u.first_name, u.last_name, u.email,
        u.user_type, ud.photo, ud.phone, ud.address
        FROM users u INNER JOIN user_details ud ON ud.user_id = u.id
        WHERE u.user_type IN (2, 3)
        AND u.activation = 0');
      return view('admin.user.newusers', ['newUsers' => $newUsers, 'admin' => $admin]);
  }

  public function getBlockedUsers(){
      return view('admin.user.blockedusers');
  }

  public function getUserProfile($id){
      $admin = DB::table('users')->where('user_type', '=', 1)->get();
      $userProfiles = DB::table('users')
        ->join('user_details', 'users.id', '=', 'user_details.user_id')
        ->select('users.*', 'user_details.*')
        ->where('users.id', '=', $id)
        ->get();
      return view('admin.user.userprofile', ['userProfiles' => $userProfiles, 'admin' => $admin]);
  }

    public function postActivateUser(Request $request){
      $admin = DB::table('users')->where('user_type', '=', 1)->get();
        DB::table('users')
            ->where('id', '=', $request->input('activateuser'))
            ->update(['activation' => 1]);
            $newUsers = DB::select('SELECT u.id, u.first_name, u.last_name, u.email,
              u.user_type, ud.photo, ud.phone, ud.address
              FROM users u INNER JOIN user_details ud ON ud.user_id = u.id
              WHERE u.user_type IN (2, 3)
              AND u.activation = 0');
        return view('admin.user.newusers', ['newUsers' => $newUsers, 'admin' => $admin]);
    }
}
