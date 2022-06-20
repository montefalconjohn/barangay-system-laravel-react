<?php

namespace App\Repositories\CivilStatuses;

use App\Repositories\CivilStatuses\CivilStatusesRepositoryInterface;
use App\Models\CivilStatuses;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CivilStatusesRepository implements CivilStatusesRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getCivilStatusById(int $id): CivilStatuses
    {
        $civilStatus = CivilStatuses::find($id);

        if (!$civilStatus) {
            throw new HttpException(500, "Civil Status with {$id} does not exist.");
        }

        return $civilStatus;
    }

    /**
     * @inheritDoc
     */
    public function getAllCivilStatuses(): array
    {
        return CivilStatuses::all()->toArray();
    }
}