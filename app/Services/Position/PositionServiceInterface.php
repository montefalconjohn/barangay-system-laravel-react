<?php

namespace App\Services\Position;

use App\Http\Requests\PositionRequest;
use App\Models\Position;

interface PositionServiceInterface
{
    /**
     * Fetches all Positions available
     *
     */
    public function fetchPositions();

    /**
     * Fetches specific Position by ID
     *
     * @param int $id
     * @return Position
     */
    public function fetchPositionById(int $id): Position;

    /**
     * Create a position
     *
     * @param PositionRequest $request
     * @return Position
     */
    public function createPosition(PositionRequest $request): Position;

    /**
     * Update a specific position by ID
     * @param PositionRequest $request
     * @param int $id
     * @return void
     */
    public function updatePosition(PositionRequest $request, int $id): void;

    /**
     * Deletes a specific position
     *
     * @param int $id
     * @return void
     */
    public function deletePosition(int $id): void;
}
