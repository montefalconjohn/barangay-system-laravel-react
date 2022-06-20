<?php

namespace App\Repositories\EmploymentStatuses;

use App\Repositories\EmploymentStatuses\EmploymentStatusesRepositoryInterface;
use App\Models\EmploymentStatuses;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EmploymentStatusesRepository implements EmploymentStatusesRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAllEmploymentStatuses()
    {
        return EmploymentStatuses::all();
    }

     /**
     * @inheritDoc
     */
    public function getEmploymentStatusById(int $id): EmploymentStatuses
    {
        $status = EmploymentStatuses::find($id);

        if (!$status) {
            throw new HttpException(500, "Employment status with {$id} does not exist.");
        }

        return $status;
    }
}