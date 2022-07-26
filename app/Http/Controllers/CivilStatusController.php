<?php

namespace App\Http\Controllers;

use App\Http\Requests\CivilStatusRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CivilStatusResource;
use App\Services\CivilStatuses\CivilStatusServiceInterface;

class CivilStatusController extends Controller
{
    /** @var CivilStatusesServiceInterface */
    private $civilStatusService;
    
    /**
     * CivilStatusesController constroller
     * 
     * @param CivilStatusServiceInterface
     */
    public function __construct(CivilStatusServiceInterface $civilStatusService)
    {
        $this->civilStatusService = $civilStatusService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CivilStatusResource::collection($this->civilStatusService->fetchCivilStatuses());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CivilStatusRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CivilStatusRequest $request)
    {
        return new CivilStatusResource($this->civilStatusService->createCivilStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CivilStatusResource($this->civilStatusService->fetchCivilStatusById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CivilStatusRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CivilStatusRequest $request, $id)
    {
        $this->civilStatusService->updateCivilStatusById($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->civilStatusService->deleteCivilStatusById($id);

        return response()->json('Civil status sucessfully deleted.');
    }
}
