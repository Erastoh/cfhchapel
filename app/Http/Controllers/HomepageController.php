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


}
