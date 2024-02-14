<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;

class HomepageController extends Controller
{
    //
     public function eventDetails()
    {
        return view('homepageweb.eventdetails');
    }

      public function homepage()
    {
        return view('welcome');
    }

        public function contactus()
    {
        $message = "";
        return view('homepageweb.contactus', compact('message'));
    }


        public function give()
    {
        return view('homepageweb.give');
    }

            public function service()
    {
        return view('homepageweb.service');
    }

    

    public function appointments(Request $request){
        // $kategori = "daat=e here";
        //  return view('homepageweb.testdata', compact('kategori'));
        
        $kategori = new appointments();
        $kategori->firstName = $request->firstName;
        $kategori->lastName = $request->lastName;
        $kategori->date = $request->date;
        $kategori->reason = $request->reason;
        $kategori->phone = $request->phone;
        $kategori->email = $request->email;
        $kategori->message = $request->message;
        $kategori->save();
        $message = "Sent successfully, We will get in touch";
        return view('homepageweb.contactus', compact('message'));
        //  response()->json('Data saved successfully', 200);

    }


}
