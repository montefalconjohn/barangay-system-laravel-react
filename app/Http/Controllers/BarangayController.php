<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BarangayRequest;
use App\Http\Resources\BarangayResource;
use App\Services\Barangay\BarangayServiceInterface;

class BarangayController extends Controller
{
    /** @var BarangayServiceInterface */
    private $barangayService;

    /**
     * BarangayController constructor.
     * 
     * @param BarangayServiceInterface $barangayService
     */
    public function __construct(BarangayServiceInterface $barangayService)
    {
        $this->barangayService = $barangayService;
    }

    /**
       * Store a newly created resource in storage.
       * 
       * @param \Illuminate\Http\Request $request
       * @return \Illuminate\Http\Response
    */
    public function store(BarangayRequest $request)
    {
        // It automatically checks the validation
        // $request->validated();
            
        return new BarangayResource($this->barangayService->createBarangay($request));
    }
  
    /**
       * Display the specified resource.
       *
       * @param int $id
       * @return \Illuminate\Http\Response
    */
    public function show(int $id)
    {
        // die('here');
        return new BarangayResource($this->barangayService->fetchBarangayInformationById($id));
    }
  
    /**
       * Update the specified resource in storage.
       *
       * @param \Illuminate\Http\Request  $request
       * @param int $id
       * @return \Illuminate\Http\Response
    */
    public function update(BarangayRequest $request, int $id)
    {
        $this->barangayService->updateBarangay($request, $id);

        return response()->json('Barangay information successfully updated.');
    }
  
    /**
       * Remove the specified resource from storage.
       *
       * @param  int $id
       * @return \Illuminate\Http\Response
    */
    public function destroy(int $id)
    {
        $this->barangayService->deleteBarangay($id);

        return response()->json('Barangay successfully deleted.');
    }
}