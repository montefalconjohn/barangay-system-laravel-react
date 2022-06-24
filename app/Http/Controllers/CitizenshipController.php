<?php

namespace App\Http\Controllers;

use App\Citizenship;
use App\Http\Requests\CitizenshipRequest;
use App\Http\Resources\CitizenshipResource;
use Illuminate\Http\Request;
use App\Services\Citizenship\CitizenshipServiceInterface;

class CitizenshipController extends Controller
{
    /** @var CitizenshipServiceInterface */
    private $citizenshipService;

    /**
     * CitizenshipController constructor.
     * 
     * @param CitizenshipServiceInterface $citizenshipService
     */
    public function __construct(CitizenshipServiceInterface $citizenshipService)
    {
        $this->citizenshipService = $citizenshipService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CitizenshipResource::collection($this->citizenshipService->fetchAllCitizenships());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CitizenshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CitizenshipRequest $request)
    {
        return new CitizenshipResource($this->citizenshipService->createCitizenship($request));
    } 

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return new CitizenshipResource($this->citizenshipService->fetchCitizenshipById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CitizenshipRequest  $request
     * @param  \App\Citizenship  $citizenship
     * @return \Illuminate\Http\Response
     */
    public function update(CitizenshipRequest $request, int $id)
    {
        $this->citizenshipService->updateCitizenshipById($request, $id);

        return response()->json('Citizenship successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizenship  $citizenship
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
