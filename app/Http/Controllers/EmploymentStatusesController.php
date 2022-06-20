<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmploymentStatusesRequest;
use App\Http\Resources\EmploymentStatusesResource;
use App\Services\EmploymentStatuses\EmploymentStatusesServiceInterface;

class EmploymentStatusesController extends Controller
{
    /** @var EmploymentStatusesServiceInterface */
    private $employmentStatusesService;

    /**
     * EmploymentStatusesController constructor.
     * 
     * @param EmploymentStatusesServiceInterface $employmentStatusesServiceInterface
     */
    public function __construct(EmploymentStatusesServiceInterface $employmentStatusesService)
    {
        $this->employmentStatusesService = $employmentStatusesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  EmploymentStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmploymentStatusesRequest $request)
    {
        return new EmploymentStatusesResource($this->employmentStatusesService->createEmploymentStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
