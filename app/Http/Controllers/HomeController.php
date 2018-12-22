<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
    public function registration()
    {
        return view('registration');
    }
    public function store()
    {
        return redirect()->route('home');
    }
    public function job()
    {
        return view('job');
    }
    public function freelancer()
    {
        return view('freelancer');
    }
    public function compare()
    {
        return view('compare');
    }
}
