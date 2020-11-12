<?php

namespace App\Http\Controllers;
use App\Mail;
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
      Mail::send('');
    }
}
