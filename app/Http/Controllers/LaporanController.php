<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Repositories\transaksiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    private $transaksiRepository;

    public function __construct(transaksiRepository $transaksiRepo)
    {
        $this->transaksiRepository = $transaksiRepo;
    }

    public function index(Request $request)
    {

        return view('transaksis.laporan');
    }
    public function cari(Request $request)
    {
        $input = $request->all();
        if(empty($input['tanggal']) OR empty($input['tanggal2']) ){
            Flash::error('Tanggal Harus Diisi');
            return view('transaksis.laporan');
        }
        $trans = DB::table('transaksi')
            ->select('*')
            ->where('tanggal','>=',$input['tanggal'])
            ->where('tanggal','<=',$input['tanggal2'])
            ->get();
            if(count($trans)==0){
                Flash::error('Tidak ada data');
            }
            return view('transaksis.laporan')
                ->with('trans', $trans);
    }

    
}
