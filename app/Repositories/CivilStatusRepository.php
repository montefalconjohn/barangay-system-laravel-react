<?php

namespace App\Repositories\CivilStatuses;

use App\Repositories\CivilStatuses\CivilStatusRepositoryInterface;
use App\Models\CivilStatus;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CivilStatusRepository implements CivilStatusRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getCivilStatusById(int $id): CivilStatus
    {
        // Get data
        $civilStatus = CivilStatus::find($id);

        // If id doesnt exist, throw exception
        if (!$civilStatus) {
            throw new HttpException(500, "Civil Status with {$id} does not exist.");
        }

        // return data
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
