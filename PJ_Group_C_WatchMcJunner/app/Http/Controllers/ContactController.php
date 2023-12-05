<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class ContactController extends Controller
{
    //
    public function show(){
        return view('contact');
    }
    public function send(){
        $data = request()-> validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        Mail::to('annguyena10tuyphuoc1@gmail.com')->send(new ContactUs($data));

        // dd('send');

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
