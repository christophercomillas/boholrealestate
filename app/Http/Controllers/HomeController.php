<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ValidRecaptcha;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }    

    public function contactUs(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ValidRecaptcha]            
        ]);

        return back()->with('success','Thanks for being awesome! We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed above to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.Talk to you soon,
        Bohol Real Estate');
    }

    public function test()
    {
        echo 'yeah';
    }
}
