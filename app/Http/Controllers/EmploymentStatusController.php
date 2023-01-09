<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmploymentStatusRequest;
use App\Http\Resources\EmploymentStatusResource;
use App\Services\EmploymentStatuses\EmploymentStatusServiceInterface;
use Illuminate\Http\JsonResponse;

class EmploymentStatusController extends Controller
{
    /** @var EmploymentStatusServiceInterface */
    private $employmentStatusService;

    /**
     * EmploymentStatusController constructor.
     *
     * @param EmploymentStatusServiceInterface $employmentStatusService
     */
    public function __construct(EmploymentStatusServiceInterface $employmentStatusService)
    {
        $this->employmentStatusService = $employmentStatusService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return EmploymentStatusResource::collection($this->employmentStatusService->fetchAllEmploymentStatuses());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmploymentStatusRequest $request
     * @return EmploymentStatusResource
     */
    public function store(EmploymentStatusRequest $request): EmploymentStatusResource
    {
        return new EmploymentStatusResource($this->employmentStatusService->createEmploymentStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return EmploymentStatusResource
     */
    public function show($id)
    {
        return new EmploymentStatusResource($this->employmentStatusService->fetchEmploymentStatusById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmploymentStatusRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(EmploymentStatusRequest $request, $id): JsonResponse
    {
        $this->employmentStatusService->updateEmploymentStatusById($request, $id);

        return response()->json('Employment Status successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $this->employmentStatusService->deleteEmploymentStatusById($id);

        return response()->json('Employment Status successfully deleted.');
    }
}
