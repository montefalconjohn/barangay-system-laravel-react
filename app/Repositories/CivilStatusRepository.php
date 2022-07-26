<?php

namespace App\Repositories\CivilStatuses;

use App\Repositories\CivilStatuses\CivilStatusesRepositoryInterface;
use App\Models\CivilStatus;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CivilStatusRepository implements CivilStatusRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getCivilStatusById(int $id): CivilStatus
    {
        $civilStatus = CivilStatus::find($id);

        if (!$civilStatus) {
            throw new HttpException(500, "Civil Status with {$id} does not exist.");
        }

        return $civilStatus;
    }

    /**
     * @inheritDoc
     */
    public function getAllCivilStatuses()
    {
        return CivilStatus::all();
    }
}