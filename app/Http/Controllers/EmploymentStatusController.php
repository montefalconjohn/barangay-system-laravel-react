<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmploymentStatusRequest;
use App\Http\Resources\EmploymentStatusResource;
use App\Services\EmploymentStatuses\EmploymentStatusServiceInterface;

class EmploymentStatusController extends Controller
{
    /** @var EmploymentStatusServiceInterface */
    private $employmentStatusService;

    /**
     * EmploymentStatusController constructor.
     * 
     * @param EmploymentStatusServiceInterface $employmentStatusServiceInterface
     */
    public function __construct(EmploymentStatusServiceInterface $employmentStatusService)
    {
        $this->employmentStatusService = $employmentStatusService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmploymentStatusResource::collection($this->employmentStatusService->fetchAllEmploymentStatuses());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmploymentStatusRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmploymentStatusRequest $request)
    {
        return new EmploymentStatusResource($this->employmentStatusService->createEmploymentStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new EmploymentStatusResource($this->employmentStatusService->fetchEmploymentStatusById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmploymentStatusRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmploymentStatusRequest $request, $id)
    {
        $this->employmentStatusService->updateEmploymentStatusById($request, $id);

        return response()->json('Employment Status successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->employmentStatusService->deleteEmploymentStatusById($id);

        return response()->json('Employment Status successfully deleted.');
    }
}
