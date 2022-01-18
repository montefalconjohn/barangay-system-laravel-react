<?php

namespace App\Repositories\Position;

use App\Repositories\Position\PositionRepositoryInterface;
use App\Models\Position;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PositionRepository implements PositionRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAllPositions()
    {
        return Position::all();
    }

    /**
     * @inheritDoc
     */
    public function getPositionById(int $id): Position
    {
        $position = Position::find($id);
        
        // Throw exception
        if (!$position) {
            throw new HttpException(500, "Position with {$id} does not exist.");
        }

        return $position;
    }
}