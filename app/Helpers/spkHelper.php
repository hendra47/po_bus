<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class spkHelper{
    public static function auth(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        return $currentUser->group;
    }

    public static function group($param){
        $user_group=array('admin' => 'Admin', 
            'manager' => 'Manager');
        foreach ($user_group as $key => $value) {
            if($key==$param){
                return $value;
            }
        }
    }
    public static function input_group($param){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $param=strtolower($param);
        $kesiswaan=array('eskul','sikap');
        $wali_kelas=array('absensi','raport');
        $value='true';
        if($group=='kesiswaan'){
            if(in_array($param, $kesiswaan)){
                $value="true";
            }else{
                $value="false";
            }
                   
        }
        if($group=='walikelas'){
            if(in_array($param, $wali_kelas)){
                $value="true";
            }else{
                $value="false";
            }
                  
        }
         return $value;

    }

    public static function kesiswaan(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='kesiswaan'){
            $value="true";
        }
         return $value;
    }

    public static function walikelas(){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        $group=$currentUser->group;
        $value="false";
        if($group=='walikelas'){
            $value="true";
        }
         return $value;
    }

    public static function akses($menu){
        $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
        // dd($currentUser->id);
        $akses = DB::table('users')
            ->select('users.*','hak_akses.*')
            ->join('hak_akses', 'hak_akses.group', '=', 'users.group')
            ->where('users.id','=',$currentUser->id)
            ->get();
        $data=explode(',',$akses[0]->menu);

        if(in_array($menu, $data)){
            $value="true";
        }else{
            $value="false";
        }
            return $value;
    }
    public static function alternatif($kode){
        $data = DB::table('alternatifs')
            ->select('siswas.nama_siswa')
            ->join('siswas', 'siswas.id', '=', 'alternatifs.id_siswa')
            ->where('alternatifs.kode','=',$kode)
            ->get();
        return $data[0]->nama_siswa;
      
    }
    public static function kriteria($kode){
        $data = DB::table('kriterias')
            ->select('kriterias.kriteria')
            ->where('kriterias.kode','=',$kode)
            ->get();
        return $data[0]->kriteria;
    }
    //tabel kategori/Class
    public static function kota($id){
        $data = DB::table('kota')
            ->select('kota.nama')
            ->where('kota.id','=',$id)
            ->get();
        return $data[0]->nama;
    }
    public static function harga($id){
        $data = DB::table('harga')
            ->select('harga.nominal')
            ->where('harga.id','=',$id)
            ->get();
        return $data[0]->nominal;
    }
    public static function jam($id){
        $data = DB::table('jam')
            ->select('jam.jam')
            ->where('jam.id','=',$id)
            ->get();
        return $data[0]->jam;
    }

    public static function bus($id){
        $data = DB::table('bus')
            ->select('bus.no_bus')
            ->where('bus.id','=',$id)
            ->get();
        return $data[0]->no_bus;
    }
    public static function rute($id){
        $data = DB::table('rute')
            ->select('rute.rute')
            ->where('rute.id','=',$id)
            ->get();
        return $data[0]->rute;
    }
    //tabel transaksi
     public static function member($id){
        $data = DB::table('member')
            ->select('member.nama')
            ->where('member.id','=',$id)
            ->get();
        return $data[0]->nama;
    }

    public static function total_penumpang($no){
        $data = DB::table('transaksi_detail')
            ->where('no_perjalanan','=',$no)
            ->count();
        return $data;
    }



    public static function kelas_asal($id){
        $data = DB::table('kelas')
            ->select('kelas.kota_asal')
            ->where('kelas.id','=',$id)
            ->get();
        return $data[0]->kota_asal;
    }
    public static function kelas_tujuan($id){
        $data = DB::table('kelas')
            ->select('kelas.kota_tujuan')
            ->where('kelas.id','=',$id)
            ->get();
        return $data[0]->kota_tujuan;
    }

    public static function transaksi($id){
        $data = DB::table('transaksi')
            ->select('transaksi.id_kelas')
            ->where('transaksi.no_perjalanan','=',$id)
            ->get();
        return $data[0]->id_kelas;
    }

    public static function kelas_jam($id){
        $data = DB::table('kelas')
            ->select('kelas.id_jam')
            ->where('kelas.id','=',$id)
            ->get();
        return $data[0]->id_jam;
    }

    public static function maxValueInArray($array, $keyToSearch)
    {
    $currentMax = NULL;
        foreach($array as $arr)
        {
            foreach($arr as $key => $value)
            {
                if ($key == $keyToSearch && ($value >= $currentMax))
                {
                    $currentMax = $value;
                }
            }
        }

        return $currentMax;
    }

}
