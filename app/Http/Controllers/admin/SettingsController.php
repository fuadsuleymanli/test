<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AccommondationTypes;
use App\TransportTypes;
use App\RecommendedFor;
use App\Activities;

class SettingsController extends Controller
{
    public function getActivities(){
      $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $accommondations = DB::table('accommondation_types')->get();
        $transports = DB::table('transport_types')->get();
        $recommendeds = DB::table('recommended_fors')->get();
        $activities = DB::table('activities')->get();
        return view('admin.settings.activities', [
          'accommondations' => $accommondations,
          'transports' => $transports,
          'recommendeds' => $recommendeds,
          'activities' => $activities,
          'admin' => $admin
        ]);
    }

    public function postActivities(Request $request){

    }
}
