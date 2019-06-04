<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getContacts(){
        return view('front.contacts');
    }

    public function postContacts(Request $request){
      $this->validate($request, [
          'your_name' => 'required',
          'your_email' => 'required|email',
          'your_message' => 'required'
      ],[
          'your_name.required' => 'Enter name',
          'your_email.required' => 'Enter email',
          'your_email.email' => 'Change email',
          'your_message.required' => 'Enter password'
      ]);
      $user_id = 0;
      if(Auth::check()){
        $user_id = Auth::user()->id;
      }else {
        $user_id = 0;
      }
      date_default_timezone_get();
      $mail = new Mail([
          'name' => $request->input('your_name'),
          'from' => $request->input('your_email'),
          'subject' => "Any Questions",
          'msg' => $request->input('your_message'),
          'received_time' => date('Y-m-d h:i:s', time()),
          'user_id' => $user_id
      ]);
      $mail->save();
      return redirect()->route('front.contacts');
    }
}
