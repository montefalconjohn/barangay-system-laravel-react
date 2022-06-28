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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
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
          return new StudentsResource($this->studentService->fetchStudentByStudentId($id));
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
          $this->studentService->updateStudent($request, $id);
  
          return response()->json('Student successfully updated.');
    }

    /**
       * Remove the specified resource from storage.
       *
       * @param  int $id
       * @return \Illuminate\Http\Response
    */
    public function destroy(int $id)
    {
          $this->studentService->deleteStudent($id);
          
          return response()->json('Student successfully deleted.');
    }
}
