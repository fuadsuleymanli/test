<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\BjMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function getInbox(){
        $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $mails = DB::table('bj_mails')
            ->select('id', 'name', 'subject', 'received_time', 'status')
            ->where('to', '=', '')
            ->get();
        $unread = DB::table('bj_mails')
            ->select('id')
            ->where([
                ['status', '=', '0'],
                ['to', '=', '']
            ])
            ->get();
        $deleted = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '2')
            ->get();
        return view('admin.mail.inbox', ['admin' => $admin, 'mails' => $mails, 'unread' => $unread, 'deleted' => $deleted]);
    }

    public function getSent(){
        $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $mails = DB::table('bj_mails')
            ->select('id', 'name', 'subject', 'received_time', 'status')
            ->where('from', '=', '')
            ->get();
        $unread = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '0')
            ->get();
        $deleted = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '2')
            ->get();
        return view('admin.mail.sent', ['admin' => $admin, 'mails' => $mails, 'unread' => $unread, 'deleted' => $deleted]);
    }

    public function getCompose(){
        $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $unread = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '0')
            ->get();
        $deleted = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '2')
            ->get();
        return view('admin.mail.compose', ['admin' => $admin, 'unread' => $unread, 'deleted' => $deleted]);
    }

    public function postCompose(Request $request){
        $this->validate($request, [
            'to_email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
//            'attach' => 'mimes:jpg,jpeg,png,pdf'
        ],[
            'to_email.required' => 'Choose photo',
            'to_email.email' => 'Just jpg, jpeg or png',
            'subject.required' => 'Choose certificate',
            'message.required' => 'Enter first name',
//            'attach.mimes' => 'Just jpg, jpeg, png or pdf'
        ]);
        $sendmail = new BjMail([
            'name' => 'Book-Journey',
            'from' => 'mail@book-journey.az',
            'to' => $request->input('to_email'),
            'subject' => $request->input('subject'),
            'msg' => $request->input('message'),
            'sent_time' => date('Y-m-d h:i:s', time()),
            'user_id' => Auth::user()->id
        ]);
        $sendmail->save();
        if($sendmail->save()){
            if($request->hasFile('attach')){
                $file = $request->file('attach');
                $fileName = $request->input('attach').time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/admin/attach/', $fileName);
            }
            $subject = $request->input('subject');
            $email = $request->input('to_email');
            $data = [
                'subject' => $subject,
                'name' => 'Book-Journey',
                'email' => $email
            ];
            Mail::send('admin.mail.mail', $data, function ($msg) use ($subject, $email){
                $msg->from('mail@book-journey.az');
                $msg->to($email);
                $msg->subject($subject);

            });

            $result = 'true';
            $msg = 'Hörmətli, '.Auth::user()->first_name.' müraciətiniz qəbul olundu';
            return view('admin.mail.inbox', ['msg' => $msg, 'result' => $result]);
        }else{
            $result = 'false';
            $msg = 'Hörmətli '.Auth::user()->first_name.' müraciətiniz qəbul olunmadı';
            return view('admin.mail.inbox', ['msg' => $msg, 'result' => $result]);
        }
        $admin = DB::table('users')->where('user_type', '=', 1)->get();
        $unread = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '0')
            ->get();
        $deleted = DB::table('bj_mails')
            ->select('id')
            ->where('status', '=', '2')
            ->get();
        return view('admin.mail.compose', ['admin' => $admin, 'unread' => $unread, 'deleted' => $deleted]);
    }

    public function getMessage(){
        return view('admin.mail.message');
    }
}
