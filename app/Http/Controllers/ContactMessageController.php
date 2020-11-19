<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create(){

        return view('contact');
    }
    //
    public function store(Request $request)
    {
//  validation first
//        dd($request->all());
//        validation first
      $this->validate($request,[
          'name'=>'required',
          'email'=>'required|email',
          'subject'=>'required',
          'message'=>'required'
      ]);
      Mail::send('emails.contact-message',[
          'msg'=>$request->message
      ],function ($mail) use ($request){
//          this cliect email to send the message
        $mail->from($request->email,$request->name);
//   this is the support email which receive all cient message
        $mail->to('anoldchifamba@gmail.com')->subject('Contact Message');
      });

      return redirect()->back()->with('flash_message','Thank you for your message');
    }
}
