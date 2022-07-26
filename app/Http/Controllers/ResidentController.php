<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentRequest;
use App\Http\Resources\ResidentResource;
use App\Services\Residents\ResidentServiceInterface;

class ResidentController extends Controller
{
    /** @var ResidentServiceInterface */
    private $residentService;

    /**
     * ResidentController constructor.
     * 
     * @param ResidentServiceInterface $residentService
     */
    public function __construct(ResidentServiceInterface $residentService)
    {
        $this->residentService = $residentService;
    }

    /**
      * Store a newly created resource in storage.
      *
      * @param  ResidentRequest $request
      * @return \Illuminate\Http\Response
    */
    public function store(ResidentRequest $request)
    {
      return new ResidentResource($this->residentService->createResident($request));
    }

    /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
    */
      public function show(int $id)
      {
          return new ResidentResource($this->residentService->fetchResidentById($id));
      }

    /**
       * Update the specified resource in storage.
       *
       * @param ResidentRequest  $request
       * @param int $id
       * @return \Illuminate\Http\Response
    */
    public function update(ResidentRequest $request, int $id)
    {
         $this->residentService->updateResidentById($request, $id);
  
          return response()->json('Resident successfully updated.');
    }

    /**
       * Remove the specified resource from storage.
       *
       * @param  int $id
       * @return \Illuminate\Http\Response
    */
    public function destroy(int $id)
    {
          $this->residentService->deleteResidentById($id);

          return response()->json('Resident successfully deleted.');
    }
}
