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
        $kelas=array();
        return view('website.index')
             ->with(['kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
    }

    public function pesanan()
    {

    $detail = DB::table('transaksi_detail')
        ->select('*')
        ->get();
        return view('website.pesanan.index')
             ->with(['detail'=>$detail]);
    }

    public function upload($id)
    {

    $detail = DB::table('transaksi_detail')
        ->select('*')
        ->where('id','=',$id)
        ->get();
        return view('website.upload.index')
             ->with(['id'=>$id,'detail'=>$detail]);

    }

    public function cari(Request $request)
    {
        $cari = $request->all();
        
        $kota = DB::table('kota')
        ->select('id','nama')
        ->get();
         $rute = DB::table('rute')
        ->select('id','rute')
        ->get();

        $kelas = DB::table('kelas')
        ->select('*')
        ->where('kota_asal','=',$cari['asal'])
        ->where('kota_tujuan','=',$cari['tujuan'])
        ->get();
        // dd($kelas);
        
        if(empty($cari['tanggal'])){
            Flash::error('Tanggal Harus diisi');    
            $kelas=array();
            return view('website.index')
                ->with(['kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
        }


        if(count($kelas)>0){
        // Flash::error(' ada data');
            return view('website.index')
             ->with(['tanggal'=>$cari['tanggal'],'kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
        }

        Flash::error('Tidak ada data');
        
        $kelas=array();
        return view('website.index')
             ->with(['kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
    }

    public function duduk($id,$tanggal)
    {
        $no_perjalanan =$tanggal."-".$id;
        
        $detail = DB::table('transaksi_detail')
        ->select('*')
        ->where('no_perjalanan','=',$no_perjalanan)
        ->get();
        // dd($detail);
        $kota = DB::table('kota')
        ->select('id','nama')
        ->get();
         $rute = DB::table('rute')
        ->select('id','rute')
        ->get();
        $kelas=array();

        $order = DB::table('kelas')
        ->select('*')
        ->where('id','=',$id)
        ->get();
        $kursi=$order[0];
        return view('website.index')
             ->with(['no_perjalanan'=>$no_perjalanan,'detail'=>$detail,'tanggal'=>$tanggal,'id_kelas'=>$id,'kursi'=>$kursi->seat,'kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
    }

    public function validasi()
    {
        Flash::error('silahkan login untuk melanjutkan pemesanan');

        return view('website.login.index');
    }

    public function login()
    {

        return view('website.login.index');
    }
    public function logout()
    {
        session(['login'=>""]);
        return view('website.login.index');
    }
    public function perjalanan(){
        $buses = DB::table('bus')
        ->select('*')
        ->get();
        return view('website.perjalanan.index')
        ->with('buses', $buses);


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

        Flash::success('Ada berhasil registrasi silahkan login.');
        return view('website.login.index');

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
        session(['login'=>$users]);
        Flash::success('Login Berhasil silahkan lanjutkan reservasi');
        return redirect()->action('WebsiteController@index');
        // // dd(session('login'));
        //      return view('website.login.index')
        //      ->with(['input'=>$users]);       
    }else{
        Flash::error('Login gagal.');
         return view('website.login.index')
         ->with(['input'=>$input]);
    }

    }

    public function uploadBukti(Request $request){
        $input = $request->all();
        // dd($input);
        if (!isset($input['bukti'])) {
             Flash::error('bukti Transfer Harus Diisi');
            $detail = DB::table('transaksi_detail')
            ->select('*')
            ->where('id','=',$input['id'])
            ->get();
            return view('website.upload.index')
                ->with(['id'=>$input['id'],'detail'=>$detail]);    
        }
        $photoName = time().'.'.$request->bukti->getClientOriginalExtension();
        $request->bukti->move(public_path('photos'), $photoName);
        // dd($photoName);
        DB::table('transaksi_detail')
            ->where('id', $input['id'])
            ->update(['bukti_transfer' => $photoName,'status'=>'done']);

        Flash::error('upload bukti Transfer berhasil');

        $detail = DB::table('transaksi_detail')
        ->select('*')
        ->get();
        return view('website.pesanan.index')
            ->with(['detail'=>$detail]);



    }

    public function pilih_kursi(Request $request){
        $req=$request->all();
        if(empty($req['no'])){
            Flash::error('Anda belum memlilih kursi');    
            $kota = DB::table('kota')
            ->select('id','nama')
            ->get();
             $rute = DB::table('rute')
            ->select('id','rute')
            ->get();
            $kelas=array();
            return view('website.index')
                 ->with(['tanggal'=>$req['tanggal'],'id_kelas'=>$req['id_kelas'],'kursi'=>$req['kursi'],'kelas'=>$kelas,'data_kota'=>$kota,'data_rute'=>$rute]);
        }
        $no_perjalanan = $req['tanggal']."-".$req['id_kelas'];
        $trans = DB::table('transaksi')
            ->select('*')
            ->where('no_perjalanan','=',$no_perjalanan)
            ->get();
        $jam = DB::table('kelas')
        ->select('id_jam')
        ->where('id','=',$req['id_kelas'])
        ->get();
        $harga = DB::table('kelas')
        ->select('id_harga')
        ->where('id','=',$req['id_kelas'])
        ->get();
        // dd($harga);

        if(count($trans)==0){
            DB::insert('insert into transaksi (id_kelas,tanggal,no_perjalanan) values (?,?,?)', 
            [$req['id_kelas'],$req['tanggal'],$no_perjalanan]);
        }

        foreach ($req['no'] as $key) {
            DB::insert('insert into transaksi_detail (id_member,no_kursi,no_perjalanan,tanggal,jam,status,bayar) values (?,?,?,?,?,?,?)', 
            [session('login')[0]->id,$key,$no_perjalanan,$req['tanggal'],$jam[0]->id_jam,'pending',$harga[0]->id_harga]);
        }

        $header = DB::table('transaksi')
        ->select('*')
        ->where('no_perjalanan','=',$no_perjalanan)
        ->get();

        
        $detail = DB::table('transaksi_detail')
        ->select('*')
        ->where('no_perjalanan','=',$no_perjalanan)
        ->get();

        Flash::success('Pesanan anda berhasil disimpan');
        return view('website.booking.index')
                ->with(['no_perjalanan'=>$no_perjalanan,'header'=>$header,'detail'=>$detail]);

    }
}
