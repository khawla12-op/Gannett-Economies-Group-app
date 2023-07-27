<?php

namespace App\Http\Controllers;

use App\Mail\FormDataNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $formData = $request->all();
        
    
        $email= new FormDataNotification($formData);
        Mail::to('khawlaallak@gmail.com')->send($email);
        //send(new FormDataNotification()) ->This is the email i'm sending 
        
    }
}
