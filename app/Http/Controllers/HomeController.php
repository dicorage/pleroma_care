<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Pleroma Care'
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function contact(){
        return view('contact', [
            'title' => 'Contact'
        ]);
    }

    public function contactSubmit(Request $request){
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'required|string',
        ]);

        Mail::to('info@pleromacare.com')->send(new ContactMail($request->all()));

        return back()->with('success','Your Message has been sent, you receive a reply soonest.');
    }
}
