<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\ContactEmail;

class PortifolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        dd($request->all());
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        dd($details);

        Mail::to('kevinmugiira@gmail.com')->send(new ContactEmail($details));
        return back()->with('sent-message','Message sent successfully!');
    }
}