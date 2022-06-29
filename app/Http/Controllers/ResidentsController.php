<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentsRequest;
use App\Http\Resources\ResidentsResource;
use App\Services\Residents\ResidentsServiceInterface;

class ResidentsController extends Controller
{
    /** @var ResidentsServiceInterface */
    private $residentsService;

    /**
     * ResidentsController constructor.
     * 
     * @param ResidentsServiceInterface $residentsService
     */
    public function __construct(ResidentsServiceInterface $residentsService)
    {
        $this->residentsService = $residentsService;
    }

    /**
      * Store a newly created resource in storage.
      *
      * @param  ResidentsRequest $request
      * @return \Illuminate\Http\Response
    */
    public function store(ResidentsRequest $request)
    {
      return new ResidentsResource($this->residentsService->createResident($request));
    }

    /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
    */
      public function show(int $id)
      {
          return new ResidentsResource($this->residentsService->fetchResidentById($id));
      }

    /**
       * Update the specified resource in storage.
       *
       * @param ResidentsRequest  $request
       * @param int $id
       * @return \Illuminate\Http\Response
    */
    public function update(ResidentsRequest $request, int $id)
    {
         $this->residentsService->updateResidentById($request, $id);
  
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
          $this->residentsService->deleteResidentById($id);

          return response()->json('Resident successfully deleted.');
    }
}
