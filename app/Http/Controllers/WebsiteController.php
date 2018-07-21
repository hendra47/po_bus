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
    public function register(){
        return view('website.register.index');

    }
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created member in storage.
     *
     * @param CreatememberRequest $request
     *
     * @return Response
     */
    public function store(CreatememberRequest $request)
    {
        $input = $request->all();

        $member = $this->memberRepository->create($input);

        Flash::success('Member saved successfully.');

        return redirect(route('members.index'));
    }
}
