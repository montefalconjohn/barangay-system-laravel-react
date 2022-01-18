<?php

namespace App\Services\Position;

use App\Services\Position\PositionServiceInterface;
use App\Models\Position;
use App\Repositories\Position\PositionRepositoryInterface;

class PositionService implements PositionServiceInterface
{
    /** @var PositionRepositoryInterface */
    private $positionRepository;

    /**
     * PositionService constructor.
     * 
     * @param PositionRepositoryInterface $positionRepository
     */
    public function __construct(PositionRepositoryInterface $positionRepository)
    {
        $this->positionRepository = $positionRepository;    
    }

    /**
     * @inheritDoc
     */
    public function fetchPositions(): array
    {
        return $this->positionRepository->getAllPositions();
    }

    /**
     * @inheritDoc
     */
    public function fetchPositionById(int $id): Position
    {
        return $this->positionRepository->getPositionById($id);
    }

    /**
     * @inheritDoc
     */
    public function createPosition($request): Position
    {
        return Position::create([
            'position_name' => $request->positionName
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updatePosition($request, int $id): void
    {
        $position = $this->positionRepository->getPositionById($id);

        $position->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deletePosition(int $id): void
    {
        $position = $this->positionRepository->getPositionById($id);

        $position->delete();
    }
}