<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitizenshipRequest;
use App\Http\Resources\CitizenshipResource;
use App\Services\Citizenship\CitizenshipServiceInterface;
use Illuminate\Http\JsonResponse;

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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CitizenshipResource::collection($this->citizenshipService->fetchAllCitizenships());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CitizenshipRequest $request
     * @return CitizenshipResource
     */
    public function store(CitizenshipRequest $request): CitizenshipResource
    {
        return new CitizenshipResource($this->citizenshipService->createCitizenship($request));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return CitizenshipResource
     */
    public function show(int $id): CitizenshipResource
    {
        return new CitizenshipResource($this->citizenshipService->fetchCitizenshipById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CitizenshipRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(CitizenshipRequest $request, int $id): JsonResponse
    {
        $this->citizenshipService->updateCitizenshipById($request, $id);
        return response()->json('Citizenship successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->citizenshipService->deleteCitizenshipById($id);
        return response()->json('Citizenship successfully deleted.');
    }
}
