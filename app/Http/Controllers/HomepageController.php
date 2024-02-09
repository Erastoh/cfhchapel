<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('homepageweb.contactus');
    }


        public function give()
    {
        return view('homepageweb.give');
    }

            public function service()
    {
        return view('homepageweb.service');
    }


}
