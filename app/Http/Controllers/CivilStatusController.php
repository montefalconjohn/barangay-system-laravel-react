<?php

namespace App\Http\Controllers;

use App\Http\Requests\CivilStatusesRequest;
use Illuminate\Http\Request;
use App\Http\Resources\CivilStatusesResource;
use App\Services\CivilStatuses\CivilStatusesServiceInterface;

class CivilStatusController extends Controller
{
    /** @var CivilStatusesServiceInterface */
    private $civilStatusesService;
    
    /**
     * CivilStatusesController constroller
     * 
     * @param CivilStatusesServiceInterface
     */
    public function __construct(CivilStatusesServiceInterface $civilStatusesService)
    {
        $this->civilStatusesService = $civilStatusesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CivilStatusesResource::collection($this->civilStatusesService->fetchCivilStatuses());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CivilStatusesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CivilStatusesRequest $request)
    {
        return new CivilStatusesResource($this->civilStatusesService->createCivilStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CivilStatusesResource($this->civilStatusesService->fetchCivilStatusById($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CivilStatusesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CivilStatusesRequest $request, $id)
    {
        $this->civilStatusesService->updateCivilStatusById($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
