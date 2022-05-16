<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ConfirmationMail;
class Emailcontroller extends Controller
{
    public function sending()
    {
        return view('emails.email');
    }
    public function store()
    {
           $rolse=[
            'email'=>'required|email',
            'body'=>'required',
        ];
    
        $validated = request()->validate($rolse);

        $to = request('email');
        $body = request('body');
        //__send__//
        $obj=new  \stdClass;
        $obj->message=$body;
        Mail::to($to)->send(new ConfirmationMail($obj));
    }
}
