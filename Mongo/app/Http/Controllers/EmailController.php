<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
class EmailController extends Controller
{
    //
    public function send(){
       $details = [
           'title'=>'Title:Message from clients ',
           'body'=>'Body:Can i reset your password'
       ];
       \Mail::to('kibetdavidro@gmail.com')->send(new SendMail($details));
       return view('Emails.main');
    }
}
