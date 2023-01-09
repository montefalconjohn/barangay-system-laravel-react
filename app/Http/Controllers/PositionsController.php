<?php

namespace App\Http\Controllers;

use App\Http\Resources\PositionResource;
use App\Models\Positions;
use App\Services\Position\PositionServiceInterface;
use App\Http\Requests\PositionRequest;
use Illuminate\Http\JsonResponse;

class PositionsController extends Controller
{
    /** @var PositionServiceInterface */
    private $positionService;

    /**
     * PositionsController constructor.
     *
     * @param PositionServiceInterface $positionService
     */
    public function __construct(PositionServiceInterface $positionService)
    {
        $this->positionService = $positionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PositionResource::collection($this->positionService->fetchPositions());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PositionRequest $request
     * @return PositionResource
     */
    public function store(PositionRequest $request): PositionResource
    {
        return new PositionResource($this->positionService->createPosition($request));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return PositionResource
     */
    public function show(int $id): PositionResource
    {
        return new PositionResource($this->positionService->fetchPositionById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PositionRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(PositionRequest $request, int $id): JsonResponse
    {
        $this->positionService->updatePosition($request, $id);
        return response()->json('Position successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->positionService->deletePosition($id);
        return response()->json('Position successfully deleted.');
    }
}
