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

class transaksiController extends AppBaseController
{
    /** @var  transaksiRepository */
    private $transaksiRepository;

    public function __construct(transaksiRepository $transaksiRepo)
    {
        $this->transaksiRepository = $transaksiRepo;
    }

    /**
     * Display a listing of the transaksi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transaksiRepository->pushCriteria(new RequestCriteria($request));
        $transaksis = $this->transaksiRepository->all();

        return view('transaksis.index')
            ->with('transaksis', $transaksis);
    }

    /**
     * Show the form for creating a new transaksi.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaksis.create');
    }

    /**
     * Store a newly created transaksi in storage.
     *
     * @param CreatetransaksiRequest $request
     *
     * @return Response
     */
    public function store(CreatetransaksiRequest $request)
    {
        $input = $request->all();

        $transaksi = $this->transaksiRepository->create($input);

        Flash::success('Transaksi saved successfully.');

        return redirect(route('transaksis.index'));
    }

    /**
     * Display the specified transaksi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transaksi = $this->transaksiRepository->findWithoutFail($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.show')->with('transaksi', $transaksi);
    }

    /**
     * Show the form for editing the specified transaksi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transaksi = $this->transaksiRepository->findWithoutFail($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.edit')->with('transaksi', $transaksi);
    }

    /**
     * Update the specified transaksi in storage.
     *
     * @param  int              $id
     * @param UpdatetransaksiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransaksiRequest $request)
    {
        $transaksi = $this->transaksiRepository->findWithoutFail($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $transaksi = $this->transaksiRepository->update($request->all(), $id);

        Flash::success('Transaksi updated successfully.');

        return redirect(route('transaksis.index'));
    }

    /**
     * Remove the specified transaksi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaksi = $this->transaksiRepository->findWithoutFail($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $this->transaksiRepository->delete($id);

        Flash::success('Transaksi deleted successfully.');

        return redirect(route('transaksis.index'));
    }
}
