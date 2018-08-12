<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtransaksi_detailRequest;
use App\Http\Requests\Updatetransaksi_detailRequest;
use App\Repositories\transaksi_detailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class transaksi_detailController extends AppBaseController
{
    /** @var  transaksi_detailRepository */
    private $transaksiDetailRepository;

    public function __construct(transaksi_detailRepository $transaksiDetailRepo)
    {
        $this->transaksiDetailRepository = $transaksiDetailRepo;
    }

    /**
     * Display a listing of the transaksi_detail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transaksiDetailRepository->pushCriteria(new RequestCriteria($request));
        $transaksiDetails = $this->transaksiDetailRepository->all();

        return view('transaksi_details.index')
            ->with('transaksiDetails', $transaksiDetails);
    }

    /**
     * Show the form for creating a new transaksi_detail.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaksi_details.create');
    }

    /**
     * Store a newly created transaksi_detail in storage.
     *
     * @param Createtransaksi_detailRequest $request
     *
     * @return Response
     */
    public function store(Createtransaksi_detailRequest $request)
    {
        $input = $request->all();

        $transaksiDetail = $this->transaksiDetailRepository->create($input);

        Flash::success('Transaksi Detail saved successfully.');

        return redirect(route('transaksiDetails.index'));
    }

    /**
     * Display the specified transaksi_detail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transaksiDetail = $this->transaksiDetailRepository->findWithoutFail($id);

        if (empty($transaksiDetail)) {
            Flash::error('Transaksi Detail not found');

            return redirect(route('transaksiDetails.index'));
        }

        return view('transaksi_details.show')->with('transaksiDetail', $transaksiDetail);
    }

    /**
     * Show the form for editing the specified transaksi_detail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transaksiDetail = $this->transaksiDetailRepository->findWithoutFail($id);

        if (empty($transaksiDetail)) {
            Flash::error('Transaksi Detail not found');

            return redirect(route('transaksiDetails.index'));
        }

        return view('transaksi_details.edit')->with('transaksiDetail', $transaksiDetail);
    }

    /**
     * Update the specified transaksi_detail in storage.
     *
     * @param  int              $id
     * @param Updatetransaksi_detailRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetransaksi_detailRequest $request)
    {
        $transaksiDetail = $this->transaksiDetailRepository->findWithoutFail($id);

        if (empty($transaksiDetail)) {
            Flash::error('Transaksi Detail not found');

            return redirect(route('transaksiDetails.index'));
        }

        $transaksiDetail = $this->transaksiDetailRepository->update($request->all(), $id);

        Flash::success('Transaksi Detail updated successfully.');

        return redirect(route('transaksis.index'));
    }

    /**
     * Remove the specified transaksi_detail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaksiDetail = $this->transaksiDetailRepository->findWithoutFail($id);

        if (empty($transaksiDetail)) {
            Flash::error('Transaksi Detail not found');

            return redirect(route('transaksiDetails.index'));
        }

        $this->transaksiDetailRepository->delete($id);

        Flash::success('Transaksi Detail deleted successfully.');

        return redirect(route('transaksiDetails.index'));
    }
}
