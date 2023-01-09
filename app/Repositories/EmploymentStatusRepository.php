<?php

namespace App\Repositories\EmploymentStatuses;

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
        // Get data
        $status = EmploymentStatus::find($id);

        // If id doesnt exist, throw exception
        if (!$status) {
            throw new HttpException(500, "Employment status with {$id} does not exist.");
        }

        // Return data
        return $status;
    }
}
