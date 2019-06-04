<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getAboutUs(){
        return view('front.about.aboutus');
    }
    public function getOurMission(){
        return view('front.about.ourmission');
    }
    public function getTerms(){
        return view('front.about.terms');
    }
    public function getReview(){
        return view('front.about.review');
    }
    public function getFAQ(){
        return view('front.about.faq');
    }
}
