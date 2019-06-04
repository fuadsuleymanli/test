<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getIndex(){
        $allTours = DB::table('tours')
            ->join('photos', 'tours.id', '=', 'photos.tour_id')
            ->select(
                'tours.id', 'tours.tour_name', 'tours.price', 'tours.destinations_visited', 'tours.duration', 'photos.photos'
            )
            ->groupBy('photos.tour_id')
            ->orderBy('tours.id', 'desc')
            ->take(8)->get();
        return view('front.index', ['allTours' => $allTours]);
    }
    public function getYourTour(){
        return view('front.yourtour');
    }
}
