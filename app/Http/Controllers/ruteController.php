<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateruteRequest;
use App\Http\Requests\UpdateruteRequest;
use App\Repositories\ruteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ruteController extends AppBaseController
{
    /** @var  ruteRepository */
    private $ruteRepository;

    public function __construct(ruteRepository $ruteRepo)
    {
        $this->ruteRepository = $ruteRepo;
    }

    /**
     * Display a listing of the rute.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ruteRepository->pushCriteria(new RequestCriteria($request));
        $rute = $this->ruteRepository->all();

        return view('rute.index')
            ->with('rute', $rute);
    }

    /**
     * Show the form for creating a new rute.
     *
     * @return Response
     */
    public function create()
    {
        return view('rute.create');
    }

    /**
     * Store a newly created rute in storage.
     *
     * @param CreateruteRequest $request
     *
     * @return Response
     */
    public function store(CreateruteRequest $request)
    {
        $input = $request->all();

        $rute = $this->ruteRepository->create($input);

        Flash::success('rute saved successfully.');

        return redirect(route('rute.index'));
    }

    /**
     * Display the specified rute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('rute not found');

            return redirect(route('rute.index'));
        }

        return view('rute.show')->with('rute', $rute);
    }

    /**
     * Show the form for editing the specified rute.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('rute not found');

            return redirect(route('rute.index'));
        }

        return view('rute.edit')->with('rute', $rute);
    }

    /**
     * Update the specified rute in storage.
     *
     * @param  int              $id
     * @param UpdateruteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateruteRequest $request)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('rute not found');

            return redirect(route('rute.index'));
        }

        $rute = $this->ruteRepository->update($request->all(), $id);

        Flash::success('rute updated successfully.');

        return redirect(route('rute.index'));
    }

    /**
     * Remove the specified rute from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rute = $this->ruteRepository->findWithoutFail($id);

        if (empty($rute)) {
            Flash::error('rute not found');

            return redirect(route('rute.index'));
        }

        $this->ruteRepository->delete($id);

        Flash::success('rute deleted successfully.');

        return redirect(route('rute.index'));
    }
}
