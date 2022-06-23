<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    private $residentsService;

    public function __construct()
    {
        
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
      * @param  EmploymentStatusesRequest $request
      * @return \Illuminate\Http\Response
    */
    public function store(EmploymentStatusesRequest $request)
    {
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
       * @param \Illuminate\Http\Request  $request
       * @param int $id
       * @return \Illuminate\Http\Response
    */
    public function update(StudentsRequest $request, int $id)
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
