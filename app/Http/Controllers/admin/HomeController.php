<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getHome(){
        $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $activeUsers = DB::select('SELECT u.id
          FROM users u
          WHERE u.user_type IN (2, 3)
          AND u.activation = 1
          AND u.status = 1');
        $newUsers = DB::select('SELECT u.id
          FROM users u
          WHERE u.user_type IN (2, 3)
          AND u.activation = 0
          AND u.status = 1');
        return view('admin.home', ['admin' => $admin, 'activeUsers' => $activeUsers, 'newUsers' => $newUsers]);
    }
}
