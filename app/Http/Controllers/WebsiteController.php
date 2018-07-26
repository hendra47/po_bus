<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
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

        $kota = DB::table('kota')
        ->select('id','nama')
        ->get();
         $rute = DB::table('rute')
        ->select('id','rute')
        ->get();

        return view('website.index')
             ->with(['data_kota'=>$kota,'data_rute'=>$rute]);
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
    public function tambah(Request $request)
    {
        $input = $request->all();
        // dd($input);
        // $input['nama']
        DB::insert('insert into member (nama,password,no_ktp,tgl_lahir,jk,alamat) values (?,?,?,?,?,?)', 
            [$input['nama'],$input['password'],$input['no_ktp'],$input['tgl_lahir'],$input['jk'],$input['alamat']]);

        Flash::success('Member saved successfully.');

       return view('website.register.index');
    }
}
