<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home Page";
        return view('home', compact('title'));
    }
    public function contact(request $request)
    {
        $request->validate([
            'name'  => ['required', 'min:3'],
            'email' => ['required', 'min:3', 'email:dns'],
            'subject'   => ['required'],
            'message'   => ['required']
        ]);
        $url = "https://api.telegram.org/bot2110793628:AAFDfen4hiA6pRbad_tNg9uq4DvkgNi7X9Q/sendMessage?chat_id=618206810&text=";
        $messages = $request->name.'|'.$request->email.'|'.$request->subject.'|'.$request->message;
        $message = $url.$messages;
        $send = file_get_contents($message);
        if($send){
            return redirect('/')->with('success', 'Message has ben senda. Thank You.!');
        }else{
            return redirect('/')->with('success', 'Oops.., Sending message failed.!');
        }
    }
    public function subscribe(request $request)
    {
        $validated = $request->validate([
            'email'     => ['required', 'email:dns'],
            'title' => ['required'],
        ]);

        $gabung = $request->title.' : '.$request->email;
        $url = "https://api.telegram.org/bot2110793628:AAFDfen4hiA6pRbad_tNg9uq4DvkgNi7X9Q/sendMessage?chat_id=618206810&text=";
        $message = $url.$gabung;
        $send = file_get_contents($message);
        if($send){
            return redirect('/')->with('success', 'Susbcribe.. Thank You.!');
        }else{
            return redirect('/')->with('success', 'Oops.., Sending request failed.!');
        }
    }
}
