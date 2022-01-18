<?php

namespace App\Services\Position;

use App\Services\Position\PositionServiceInterface;
use App\Models\Position;

class PositionService implements PositionServiceInterface
{
    /**  */
    private $positionRepository;

    /**
     * @inheritDoc
     */
    public function fetchPositions(): array
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchPositionById(int $id): Position
    {
        
    }

    /**
     * @inheritDoc
     */
    public function createPosition($request): Position
    {
        
    }

    /**
     * @inheritDoc
     */
    public function updatePosition($request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deletePosition(int $id): void
    {
        
    }
}