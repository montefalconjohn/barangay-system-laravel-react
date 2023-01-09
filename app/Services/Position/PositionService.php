<?php

namespace App\Services\Position;

use App\Http\Requests\PositionRequest;
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
    public function fetchPositions()
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
    public function createPosition(PositionRequest $request): Position
    {
        return Position::create([
            'position_name' => $request->position_name
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updatePosition(PositionRequest $request, int $id): void
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
