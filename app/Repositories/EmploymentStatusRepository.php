<?php

namespace App\Repositories\EmploymentStatuses;

use App\Repositories\EmploymentStatuses\EmploymentStatusRepositoryInterface;
use App\Models\EmploymentStatus;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EmploymentStatusRepository implements EmploymentStatusRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAllEmploymentStatuses()
    {
        return EmploymentStatus::all();
    }

     /**
     * @inheritDoc
     */
    public function getEmploymentStatusById(int $id): EmploymentStatus
    {
        $status = EmploymentStatus::find($id);

        if (!$status) {
            throw new HttpException(500, "Employment status with {$id} does not exist.");
        }

        return $status;
    }
}