<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TourController extends Controller
{
    public function getTours(){
        $id = Auth::user()->id;
        $userTours = DB::table('tours')
            ->join('photos', 'tours.id', '=', 'photos.tour_id')
            ->select(
                'tours.id', 'tours.tour_name', 'tours.price', 'tours.destinations_visited', 'tours.duration', 'photos.photos'
            )
            ->where('tours.user_id', '=', $id)
            ->groupBy('photos.tour_id')
            ->get();
        return view('front.user.tours', ['userTours' => $userTours]);
    }

    public function getTourDetail($id){
        $tourDetails = DB::table('tours')
            ->join('photos', 'tours.id', '=', 'photos.tour_id')
            ->select('tours.*', 'photos.*')
            ->where('tours.id', '=', $id)
            ->groupBy('photos.tour_id')
            ->get();
        return view('front.user.tourdetail',['tourDetails' => $tourDetails]);
    }

    public function getNewTour(){
        $accomondations = AccommondationType::all();
        $transports = TransportType::all();
        $recommendeds = RecommendedFor::all();
        $activities = Activity::all();
        return view('front.user.newtour', [
            'accomondations' => $accomondations,
            'transports' => $transports,
            'recommendeds' => $recommendeds,
            'activities' => $activities
        ]);
    }
    public function postNewTour(Request $request){
        $this->validate($request, [
            'tour_name' => 'required',
            'introduction' => 'required',
            'duration' => 'required',
            'title' => 'required',
//            'password' => 'min:6',
//            'confirmpassword' => 'min:6|same:password',
            'destinations_visited' => 'required',
            'description0' => 'required',
            'inclusions' => 'required',
            'exclusions' => 'required',
            'min_age' => 'required|numeric|min:1',
            'max_age' => 'required|numeric',
            'min_group' => 'required|numeric|min:1',
            'max_group' => 'required|numeric'
        ],[
            'tour_name.required' => 'Enter first name',
            'introduction.required' => 'Enter last name',
//            'password.min' => 'Minimum 6 symbol',
//            'confirmpassword.min' => 'Minimum 6 symbol',
//            'confirmpassword.same' => 'Confirm password',
            'duration.required' => 'Enter phone number',
            'title.required' => 'Enter marketing name',
            'destinations_visited.required' => 'Enter tour email',
            'description0.required' => 'Enter invoice email',
            'inclusions.required' => 'Enter location',
            'exclusions.required' => 'Enter address',
            'min_age.required' => 'Enter minimum age',
            'min_age.numeric' => 'Just number',
            'min_age.min' => 'Minimum 1 symbol',
            'max_age.required' => 'Enter maximum age',
            'max_age.numeric' => 'Just number',
            'max_age.max' => 'Maximum 2 symbol',
            'min_group.required' => 'Enter minimum group',
            'min_group.numeric' => 'Just number',
//            'min_group.max' => 'Minimum 1 symbol',
            'max_group.required' => 'Enter maximum group',
            'max_group.numeric' => 'Just number',
//            'max_group.max' => 'Maximum 3 symbol',
        ]);

        $id = Auth::user()->id;


//        if($request->input('allowed_booking') == null){
//            $allowed_booking = 0;
//        }else{
//            $allowed_booking = 1;
//        }
//
        $userTour = new Tour([
//            'photo' => $photoName,
            'tour_name' => $request->input('tour_name'),
            'introduction' => $request->input('introduction'),
            'duration' => $request->input('duration'),
            'title' => $request->input('title'),
            'destinations_visited' => $request->input('destinations_visited'),
            'inclusions' => $request->input('inclusions'),
            'exclusions' => $request->input('exclusions'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'owerview' => $request->input('owerview'),
            'min_age' => $request->input('min_age'),
            'max_age' => $request->input('max_age'),
            'min_group' => $request->input('min_group'),
            'max_group' => $request->input('max_group'),
            'accomondation' => serialize($request->input('accomondation')),
            'transport' => serialize($request->input('transport')),
            'recommended' => serialize($request->input('recommended')),
            'activity' => serialize($request->input('activity')),
            'user_id' => $id
//            activation
        ]);

        if($userTour->save()){

            $tourId = DB::table('tours')->where('user_id', '=', $id)->max('id');

            echo $request->input('counter');

            // $description = new TourDay([
            //   'day' => $description,
            //   'tour_id' => $tourId
            // ]);
            // $description->save();

            if($request->hasFile('photos')){
                $photos_array = $request->file('photos');
                $array_len = count($photos_array);
                for($i = 0; $i < $array_len; $i ++){
                    $photoName = $request->input('title').time().'_'.($i+1).'.'.$photos_array[$i]->getClientOriginalExtension();
                    $photos_array[$i]->move(public_path().'/guide/tour/photo/', $photoName);
                    $tourPhoto = new Photo([
                        'photos' => $photoName,
                        'tour_id' => $tourId
                    ]);
                    $tourPhoto->save();
                }
//            $file = $request->file('photos');

            }

            $subject = 'Book Journey | New Tour';
            $email = DB::table('users')->where('id', '=', $id)->value('email');
            $data = [
                'subject' => $subject,
                'name' => $request->tour_name,
                'email' => $email
            ];
            Mail::send('front.user.mail', $data, function ($msg) use ($subject, $email){
                $msg->from('info@book-journey.az');
                $msg->to($email);
                $msg->subject($subject);

            });

            $result = 'true';
            $msg = 'Hörmətli, '.$request->tour_name.' müraciətiniz qəbul olundu';
            return view('front.index', ['msg' => $msg, 'result' => $result]);

        }else{
            $result = 'false';
            $msg = 'Hörmətli '.$request->tour_name.' müraciətiniz qəbul olunmadı';
            return view('front.index', ['msg' => $msg, 'result' => $result]);
        }
//        return redirect()->route('front.user.tours');
//        echo $allowed_booking;
    }
    public function getFindYourTour(){
        return view('front.user.findyourtour');
    }
}
