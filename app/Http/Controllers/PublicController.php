<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
     public function homepage(){
        return view('welcome');
    }
    public function contactMe(){
        return view('contact-me');
    }
    public function contactSubmit(Request $request){
        
            $user=$request->input('userName');
            $email=$request->input('userMail');
            $message=$request->input('userMessage');
    
            $userContact=compact('user','message','email');
            Mail::to($email)->send(new ContactMail($userContact)); 
            return redirect(route('homepage'))->with('message','la Tua email è stata inoltrata correttamente');
        
    }
    public function locale($locale){
        session()->put('locale',$locale);
        return redirect()->back();
    }





}
