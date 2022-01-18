<?php

namespace App\Repositories\Position;

use App\Models\Position;

interface PositionRepositoryInterface
{
    /**
     * Returns all the positions
     * 
     * @return Position[]
     */
    public function getAllPositions();

    /**
     * Returns a specific Position by ID
     * 
     * @return Position
     */
    public function getPositionById(int $id): Position;
}