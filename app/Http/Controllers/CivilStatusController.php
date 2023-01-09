<?php

namespace App\Http\Controllers;

use App\Http\Requests\CivilStatusRequest;
use App\Http\Resources\CivilStatusResource;
use App\Services\CivilStatuses\CivilStatusServiceInterface;
use Illuminate\Http\JsonResponse;

class CivilStatusController extends Controller
{
    /** @var CivilStatusServiceInterface */
    private $civilStatusService;

    /**
     * CivilStatusController constructor.
     *
     * @param CivilStatusServiceInterface $civilStatusService
     */
    public function __construct(CivilStatusServiceInterface $civilStatusService)
    {
        $this->civilStatusService = $civilStatusService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CivilStatusResource::collection($this->civilStatusService->fetchCivilStatuses());
    }

    /***
     * Store a newly created resource in storage.
     *
     * @param CivilStatusRequest $request
     * @return CivilStatusResource
     */
    public function store(CivilStatusRequest $request): CivilStatusResource
    {
        return new CivilStatusResource($this->civilStatusService->createCivilStatus($request));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return CivilStatusResource
     */
    public function show($id)
    {
        return new CivilStatusResource($this->civilStatusService->fetchCivilStatusById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CivilStatusRequest $request
     * @param $id
     */
    public function update(CivilStatusRequest $request, $id)
    {
        $this->civilStatusService->updateCivilStatusById($request, $id);
        return response()->json('Civil status successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        $this->civilStatusService->deleteCivilStatusById($id);
        return response()->json('Civil status successfully deleted.');
    }
}
