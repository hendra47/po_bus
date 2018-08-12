<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekelasRequest;
use App\Http\Requests\updatekelasRequest;
use App\Repositories\kelasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
class kelasController extends AppBaseController
{
    /** @var  kelasRepository */
    private $kelasRepository;

    public function __construct(kelasRepository $kelasRepo)
    {
        $this->kelasRepository = $kelasRepo;
    }

    /**
     * Display a listing of the class.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kelasRepository->pushCriteria(new RequestCriteria($request));
        $kelas = $this->kelasRepository->all();

        return view('kelas.index')
            ->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new class.
     *
     * @return Response
     */
    public function create()
    {
        $bus = DB::table('bus')
        ->select('id','no_bus')
        ->get();
        $kapasitas = DB::table('bus')
        ->select('kapasitas','kapasitas')
        ->groupby('kapasitas')
        ->get();
         $jam = DB::table('jam')
        ->select('id','jam')
        ->get();
        $rute = DB::table('rute')
        ->select('id','rute')
        ->get();
         $harga = DB::table('harga')
        ->select('id','nominal')
        ->get();
        $kota = DB::table('kota')
        ->select('id','nama')
        ->get();
        
        return view('kelas.create')
                ->with(['kapasitas'=>$kapasitas,'data_bus'=>$bus,'data_jam'=>$jam,'data_rute'=>$rute,'data_nominal'=>$harga,'data_nama'=>$kota]);
    }

    /**
     * Store a newly created class in storage.
     *
     * @param CreatekelasRequest $request
     *
     * @return Response
     */
    public function store(CreatekelasRequest $request)
    {
        $input = $request->all();

        $kelas = $this->kelasRepository->create($input);

        Flash::success('kelas saved successfully.');

        return redirect(route('kelas.index'));
    }

    /**
     * Display the specified class.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kelas = $this->kelasRepository->findWithoutFail($id);

        if (empty($kelas)) {
            Flash::error('kelas not found');

            return redirect(route('kelas.index'));
        }

        return view('kelas.show')->with('kelas', $kelas);
    }

    /**
     * Show the form for editing the specified class.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kelas = $this->kelasRepository->findWithoutFail($id);


        $bus = DB::table('bus')
        ->select('id','no_bus')
        ->get();
           $jam = DB::table('jam')
        ->select('id','jam')
        ->get();
        $rute = DB::table('rute')
        ->select('id','rute')
        ->get();
        $harga = DB::table('harga')
        ->select('id','nominal')
        ->get();
        $kota = DB::table('kota')
        ->select('id','nama')
        ->get();
        $kapasitas = DB::table('bus')
        ->select('kapasitas','kapasitas')
        ->groupby('kapasitas')
        ->get();


        if (empty($kelas)) {
            Flash::error('kelas not found');

            return redirect(route('kelas.index'));
        }

        return view('kelas.edit')->with(['kapasitas'=>$kapasitas,'kelas'=>$kelas,'data_bus'=>$bus,'data_jam'=>$jam,'data_rute'=>$rute,'data_nominal'=>$harga,'data_nama'=>$kota]);

    }

    /**
     * Update the specified class in storage.
     *
     * @param  int              $id
     * @param updatekelasRequest $request
     *
     * @return Response
     */
    public function update($id, updatekelasRequest $request)
    {
        $kelas = $this->kelasRepository->findWithoutFail($id);

        if (empty($kelas)) {
            Flash::error('kelas not found');

            return redirect(route('kelas.index'));
        }

        $kelas = $this->kelasRepository->update($request->all(), $id);

        Flash::success('kelas updated successfully.');

        return redirect(route('kelas.index'));
    }

    /**
     * Remove the specified class from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kelas = $this->kelasRepository->findWithoutFail($id);

        if (empty($kelas)) {
            Flash::error('kelas not found');

            return redirect(route('kelas.index'));
        }

        $this->kelasRepository->delete($id);

        Flash::success('kelas deleted successfully.');

        return redirect(route('kelas.index'));
    }
}
