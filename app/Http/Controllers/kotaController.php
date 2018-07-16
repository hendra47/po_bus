<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatekotaRequest;
use App\Http\Requests\UpdatekotaRequest;
use App\Repositories\kotaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class kotaController extends AppBaseController
{
    /** @var  kotaRepository */
    private $kotaRepository;

    public function __construct(kotaRepository $kotaRepo)
    {
        $this->kotaRepository = $kotaRepo;
    }

    /**
     * Display a listing of the kota.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kotaRepository->pushCriteria(new RequestCriteria($request));
        $kotas = $this->kotaRepository->all();

        return view('kotas.index')
            ->with('data_kota', $kotas);
    }

    /**
     * Show the form for creating a new kota.
     *
     * @return Response
     */
    public function create()
    {
        return view('kotas.create');
    }

    /**
     * Store a newly created kota in storage.
     *
     * @param CreatekotaRequest $request
     *
     * @return Response
     */
    public function store(CreatekotaRequest $request)
    {
        $input = $request->all();

        $kota = $this->kotaRepository->create($input);

        Flash::success('kota saved successfully.');

        return redirect(route('kota_url.index'));
    }

    /**
     * Display the specified kota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kota = $this->kotaRepository->findWithoutFail($id);

        if (empty($kota)) {
            Flash::error('kota not found');

            return redirect(route('kota_url.index'));
        }

        return view('kotas.show')->with('data_kota', $kota);
    }

    /**
     * Show the form for editing the specified kota.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kota = $this->kotaRepository->findWithoutFail($id);

        if (empty($kota)) {
            Flash::error('kota not found');

            return redirect(route('kota.index'));
        }

        return view('kotas.edit')->with('data_kota', $kota);
    }

    /**
     * Update the specified kota in storage.
     *
     * @param  int              $id
     * @param UpdatekotaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatekotaRequest $request)
    {
        $kota = $this->kotaRepository->findWithoutFail($id);

        if (empty($kota)) {
            Flash::error('kota not found');

            return redirect(route('kota_url.index'));
        }

        $kota = $this->kotaRepository->update($request->all(), $id);

        Flash::success('kota updated successfully.');

        return redirect(route('kota_url.index'));
    }

    /**
     * Remove the specified kota from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kota = $this->kotaRepository->findWithoutFail($id);

        if (empty($kota)) {
            Flash::error('kota not found');

            return redirect(route('kota_url.index'));
        }

        $this->kotaRepository->delete($id);

        Flash::success('kota deleted successfully.');

        return redirect(route('kota_url.index'));
    }
}
