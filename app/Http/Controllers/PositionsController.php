<?php

namespace App\Http\Controllers;

use App\Http\Resources\PositionResource;
use App\Models\Positions;
use Illuminate\Http\Request;
use App\Services\Position\PositionServiceInterface;
use App\Http\Requests\PositionRequest;

class PositionsController extends Controller
{
    /** @var PositionServiceInterface */
    private $positionService;

    /**
     * PositionController constructor.
     * 
     * @param PositionServiceInterface
     */
    public function __construct(PositionServiceInterface $positionService)
    {
        $this->positionService = $positionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PositionResource::collection($this->positionService->fetchPositions());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PositionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionRequest $request)
    {
        return new PositionResource($this->positionService->createPosition($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return new PositionResource($this->positionService->fetchPositionById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PositionRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, int $id)
    {
        $this->positionService->updatePosition($request, $id);

        return response()->json('Position successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->positionService->deletePosition($id);

        return response()->json('Position successfully deleted.');
    }
}
