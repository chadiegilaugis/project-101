<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMasterListRequest;
use App\Http\Requests\UpdateMasterListRequest;
use App\Repositories\MasterListRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MasterListController extends AppBaseController
{
    /** @var  MasterListRepository */
    private $masterListRepository;

    public function __construct(MasterListRepository $masterListRepo)
    {
        $this->masterListRepository = $masterListRepo;
    }

    /**
     * Display a listing of the MasterList.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $masterLists = $this->masterListRepository->paginate(10);

        return view('master_lists.index')
            ->with('masterLists', $masterLists);
    }

    /**
     * Show the form for creating a new MasterList.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_lists.create');
    }

    /**
     * Store a newly created MasterList in storage.
     *
     * @param CreateMasterListRequest $request
     *
     * @return Response
     */
    public function store(CreateMasterListRequest $request)
    {
        $input = $request->all();

        $masterList = $this->masterListRepository->create($input);

        Flash::success('Member saved successfully.');

        return redirect(route('masterLists.index'));
    }

    /**
     * Display the specified MasterList.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $masterList = $this->masterListRepository->find($id);

        if (empty($masterList)) {
            Flash::error('Member not found');

            return redirect(route('masterLists.index'));
        }

        return view('master_lists.show')->with('masterList', $masterList);
    }

    /**
     * Show the form for editing the specified MasterList.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $masterList = $this->masterListRepository->find($id);

        if (empty($masterList)) {
            Flash::error('Member not found');

            return redirect(route('masterLists.index'));
        }

        return view('master_lists.edit')->with('masterList', $masterList);
    }

    /**
     * Update the specified MasterList in storage.
     *
     * @param int $id
     * @param UpdateMasterListRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMasterListRequest $request)
    {
        $masterList = $this->masterListRepository->find($id);

        if (empty($masterList)) {
            Flash::error('Member not found');

            return redirect(route('masterLists.index'));
        }

        $masterList = $this->masterListRepository->update($request->all(), $id);

        Flash::success('Member updated successfully.');

        return redirect(route('masterLists.index'));
    }

    /**
     * Remove the specified MasterList from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $masterList = $this->masterListRepository->find($id);

        if (empty($masterList)) {
            Flash::error('Member not found');

            return redirect(route('masterLists.index'));
        }

        $this->masterListRepository->delete($id);

        Flash::success('Member deleted successfully.');

        return redirect(route('masterLists.index'));
    }
}
