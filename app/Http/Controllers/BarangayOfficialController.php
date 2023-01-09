<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangayOfficialRequest;
use App\Http\Resources\BarangayOfficialResource;
use App\Services\BarangayOfficials\BarangayOfficialServiceInterface;
use Illuminate\Http\JsonResponse;

class BarangayOfficialController extends Controller
{
    /** @var BarangayOfficialServiceInterface */
    private $barangayOfficialService;

    /**
     * BarangayOfficialController constructor.
     *
     * @param BarangayOfficialServiceInterface $barangayOfficialService
     */
    public function __construct(BarangayOfficialServiceInterface $barangayOfficialService)
    {
        $this->barangayOfficialService = $barangayOfficialService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return BarangayOfficialResource::collection($this->barangayOfficialService->fetchBarangayOfficials());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BarangayOfficialRequest $request
     * @return BarangayOfficialResource
     */
    public function store(BarangayOfficialRequest $request): BarangayOfficialResource
    {
        return new BarangayOfficialResource($this->barangayOfficialService->createBarangayOfficial($request));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return BarangayOfficialResource
     */
    public function show(int $id): BarangayOfficialResource
    {
        return new BarangayOfficialResource($this->barangayOfficialService->fetchBarangayOfficialById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BarangayOfficialRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(BarangayOfficialRequest $request, int $id): JsonResponse
    {
        $this->barangayOfficialService->updateBarangayOfficialById($request, $id);
        return response()->json('Barangay Official updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->barangayOfficialService->deleteBarangayOfficial($id);

        return response()->json('Barangay Official successfully deleted.');
    }
}
