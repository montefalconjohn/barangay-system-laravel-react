<?php

namespace App\Services\Position;

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
     * @param $request
     * @return Position
     */
    public function createPosition($request): Position;

    /**
     * Update a specific position by ID
     * @param $request
     * @param int $id
     * @return void
     */
    public function updatePosition($request, int $id): void;

    /**
     * Deletes a specific position
     * 
     * @param int $id
     * @return void
     */
    public function deletePosition(int $id): void;
}