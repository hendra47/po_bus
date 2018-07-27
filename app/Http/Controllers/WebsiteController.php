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
        if (!isset($input['nama'])) {
            Flash::error('Nama Harus Diisi');
             return view('website.register.index');            
        }elseif (!isset($input['password'])) {
            Flash::error('Password Harus Diisi');
             return view('website.register.index');            
        }elseif (!isset($input['no_ktp'])) {
            Flash::error('No Ktp Harus Diisi');
             return view('website.register.index');            
        }elseif (!isset($input['tgl_lahir'])) {
            Flash::error('Tanggal Harus Diisi');
             return view('website.register.index');            
        }elseif (!isset($input['jk'])) {
            Flash::error('Jenis Kelamin Harus Diisi');
             return view('website.register.index');            
        }elseif (!isset($input['alamat'])) {
            Flash::error('Alamat Harus Diisi');
             return view('website.register.index');            
        }elseif (strlen($input['password'])<6) {
            Flash::error('Password Minimal 6 Karakter');

        }
        // dd($input);
        // $input['nama']
        DB::insert('insert into member (nama,password,no_ktp,tgl_lahir,jk,alamat) values (?,?,?,?,?,?)', 
            [$input['nama'],md5($input['password']),$input['no_ktp'],$input['tgl_lahir'],$input['jk'],$input['alamat']]);

        Flash::success('Member saved successfully.');

       return view('website.register.index');
    }
    public function klik_login(Request $request){
        $input = $request->all();
        //dd(md5($input['password']));
        if (!isset($input['nama'])) {
            Flash::error('Username Harus Diisi');
             return view('website.login.index');            
        }elseif (!isset($input['password'])) {
            Flash::error('Password Harus Diisi');
             return view('website.login.index');            
        }elseif (strlen($input['password'])<6) {
            Flash::error('Password Kurang dari 6');
             return view('website.login.index');
        }

    $users = DB::select('select * from member where nama = ? and password = ?', [$input['nama'],
        md5($input['password'])]);
    //dd(count($users));
    if (count($users)==1) {
        Flash::success('Login successfully.'); 
             return view('website.login.index')
             ->with(['input'=>$users]);       
    }else{
        Flash::error('Login gagal.');
         return view('website.login.index')
         ->with(['input'=>$input]);
    }

    }
}
