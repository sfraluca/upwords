<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Support\Facades\Gate;

class WebController extends Controller
{
    public function web()
    {
       
        return view('platform.webpage');
    }
    public function about()
    {
       
        return view('platform.about');
    }
    public function contact()
    {
       
        return view('platform.contact');
    }
}