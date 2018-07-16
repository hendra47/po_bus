<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejamRequest;
use App\Http\Requests\UpdatejamRequest;
use App\Repositories\jamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class jamController extends AppBaseController
{
    /** @var  jamRepository */
    private $jamRepository;

    public function __construct(jamRepository $jamRepo)
    {
        $this->jamRepository = $jamRepo;
    }

    /**
     * Display a listing of the jam.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jamRepository->pushCriteria(new RequestCriteria($request));
        $jam = $this->jamRepository->all();

        return view('jam.index')
            ->with('jam', $jam);
    }

    /**
     * Show the form for creating a new jam.
     *
     * @return Response
     */
    public function create()
    {
        return view('jam.create');
    }

    /**
     * Store a newly created jam in storage.
     *
     * @param CreatejamRequest $request
     *
     * @return Response
     */
    public function store(CreatejamRequest $request)
    {
        $input = $request->all();

        $jam = $this->jamRepository->create($input);

        Flash::success('jam saved successfully.');

        return redirect(route('jam.index'));
    }

    /**
     * Display the specified jam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jam = $this->jamRepository->findWithoutFail($id);

        if (empty($jam)) {
            Flash::error('jam not found');

            return redirect(route('jam.index'));
        }

        return view('jam.show')->with('jam', $jam);
    }

    /**
     * Show the form for editing the specified jam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jam = $this->jamRepository->findWithoutFail($id);

        if (empty($jam)) {
            Flash::error('jam not found');

            return redirect(route('jam.index'));
        }

        return view('jam.edit')->with('jam', $jam);
    }

    /**
     * Update the specified jam in storage.
     *
     * @param  int              $id
     * @param UpdatejamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejamRequest $request)
    {
        $jam = $this->jamRepository->findWithoutFail($id);

        if (empty($jam)) {
            Flash::error('jam not found');

            return redirect(route('jam.index'));
        }

        $jam = $this->jamRepository->update($request->all(), $id);

        Flash::success('jam updated successfully.');

        return redirect(route('jam.index'));
    }

    /**
     * Remove the specified jam from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jam = $this->jamRepository->findWithoutFail($id);

        if (empty($jam)) {
            Flash::error('jam not found');

            return redirect(route('jam.index'));
        }

        $this->jamRepository->delete($id);

        Flash::success('jam deleted successfully.');

        return redirect(route('jam.index'));
    }
}
