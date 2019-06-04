<?php

namespace App\Http\Controllers\front;

use App\Tour;
use App\User;
use App\UserDetail;
use App\AccommondationType;
use App\Activity;
use App\RecommendedFor;
use App\TransportType;
use App\Photo;
use App\TourDay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function getSignup(){
        return view('front.user.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
            'user_type' => 'required'
        ],[
            'email.required' => 'Enter email',
            'email.unique' => 'Change email',
            'password.required' => 'Enter password',
            'password.min' => 'Minimum 6 symbol',
            'confirmpassword.required' => 'Enter password',
            'confirmpassword.min' => 'Minimum 6 symbol',
            'confirmpassword.same' => 'Confirm password',
            'user_type.required' => 'Choose user type'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => implode(",", $request->input('user_type'))
        ]);
        $user->save();
        return redirect()->route('front.user.profile');
    }
    public function getLogin(){
        return view('front.user.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Enter email',
            'password.required' => 'Enter password',
            'password.min' => 'Minimum 6 symbol'
        ]);
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'user_type' => 2
        ], $request->get('remember'))){
            return redirect()->intended(route('front.user.profile'));
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('front.user.login');
    }
    public function getForgotPassword(){
        return view('front.user.login');
    }
    public function postForgotPassword(){
        return view('front.user.login');
    }
    public function getProfile(){
        $id = Auth::user()->id;
        $userProfiles = DB::table('users')
            ->join('user_details', 'users.id', '=', 'user_details.user_id')
            ->select('users.*', 'user_details.*')
            ->where('users.id', '=', $id)
            ->get();
        return view('front.user.profile', ['userProfiles' => $userProfiles]);
    }

    public function postProfile(Request $request){
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png',
            'certificate' => 'required|mimes:jpg,pdf',
            'first_name' => 'required',
            'last_name' => 'required',
//            'password' => 'min:6',
//            'confirmpassword' => 'min:6|same:password',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'marketing_name' => 'required',
            'tour_email' => 'required|email',
            'invoice_email' => 'required|email',
            'office_location' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'owerview' => 'required',
            'min_age' => 'required|numeric|min:1',
            'max_age' => 'required|numeric',
            'min_group' => 'required|numeric|min:1',
            'max_group' => 'required|numeric',
            'terms_conditions' => 'required'
        ],[
            'photo.required' => 'Choose photo',
            'photo.mimes' => 'Just jpg, jpeg or png',
            'certificate.required' => 'Choose certificate',
            'certificate.mimes' => 'Just jpg or pdf',
            'first_name.required' => 'Enter first name',
            'last_name.required' => 'Enter last name',
//            'password.min' => 'Minimum 6 symbol',
//            'confirmpassword.min' => 'Minimum 6 symbol',
//            'confirmpassword.same' => 'Confirm password',
            'phone.required' => 'Enter phone number',
            'phone.regex' => 'Just phone number',
            'phone.min' => 'Minimum 8 symbol',
            'marketing_name.required' => 'Enter marketing name',
            'tour_email.required' => 'Enter tour email',
            'tour_email.email' => 'Just email address',
            'invoice_email.required' => 'Enter invoice email',
            'invoice_email.email' => 'Just email address',
            'office_location.required' => 'Enter location',
            'address.required' => 'Enter address',
            'city.required' => 'Enter city',
            'postal_code.required' => 'Enter postal code',
            'facebook.required' => 'Enter facebook',
            'instagram.required' => 'Enter instagram',
            'owerview.required' => 'Enter owerview',
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
            'terms_conditions.required' => 'Enter terms'
        ]);

        $id = Auth::user()->id;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $photoName = $request->input('marketing_name').time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/guide/photo/', $photoName);
        }
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $certificateName = $request->input('marketing_name').time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/guide/certificate/', $certificateName);
        }
        if($request->input('allowed_booking') == null){
            $allowed_booking = 0;
        }else{
            $allowed_booking = 1;
        }
//
        $userDetail = new UserDetail([
            'photo' => $photoName,
            'certificate' => $certificateName,
            'phone' => $request->input('phone'),
            'marketing_name' => $request->input('marketing_name'),
            'tour_email' => $request->input('tour_email'),
            'invoice_email' => $request->input('invoice_email'),
            'office_location' => $request->input('office_location'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'owerview' => $request->input('owerview'),
            'min_age' => $request->input('min_age'),
            'max_age' => $request->input('max_age'),
            'min_group' => $request->input('min_group'),
            'max_group' => $request->input('max_group'),
            'allowed_booking' => $allowed_booking,
            'terms_conditions' => $request->input('terms_conditions'),
            'user_id' => $id
//            activation
        ]);

        if($userDetail->save()){
            if($request->input('password') == null){
                DB::table('users')
                    ->where('id', $request->input('tkn'))
                    ->update(array(
                        'first_name' => $request->input('first_name'),
                        'last_name' => $request->input('last_name')
                    ));
            }else{
                DB::table('users')
                    ->where('id', $request->input('tkn'))
                    ->update(array(
                        'first_name' => $request->input('first_name'),
                        'last_name' => $request->input('last_name'),
                        'password' => Hash::make($request->input('password'))
                    ));
            }

            $subject = 'Book Journey | New Guide';
            $email = DB::table('users')->where('id', '=', $request->input('tkn'))->value('email');
            $data = [
                'subject' => $subject,
                'name' => $request->first_name,
                'email' => $email
            ];
            Mail::send('front.user.mail', $data, function ($msg) use ($subject, $email){
                $msg->from('info@book-journey.az');
                $msg->to($email);
                $msg->subject($subject);

            });

            $result = 'true';
            $msg = 'Hörmətli, '.$request->first_name.' müraciətiniz qəbul olundu';
            return view('front.user.profile', ['msg' => $msg, 'result' => $result]);

        }else{
            $result = 'false';
            $msg = 'Hörmətli '.$request->first_name.' müraciətiniz qəbul olunmadı';
            return view('front.user.profile', ['msg' => $msg, 'result' => $result]);
        }
//        return redirect()->route('front.user.tours');
//        echo $allowed_booking;
    }
    public function postActivation(){
        $url = URL::current();
        $str = explode('/', $url);
        $email = $str[4];
        $token = $str[5];
        DB::table('users')
            ->where('email', $email)
            ->where('remember_token', $token)
            ->update(['activation' => 1]);
    }
}
