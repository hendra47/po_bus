<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.index');
    }
    public function login()
    {

        return view('website.login.index');
    }
    public function perjalanan(){
        return view('website.perjalanan.index');

    }
}
