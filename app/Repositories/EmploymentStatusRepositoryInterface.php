<?php

namespace App\Repositories\EmploymentStatuses;

use App\Models\EmploymentStatus;

interface EmploymentStatusRepositoryInterface
{
    /**
     * Fetches all employment statuses
     */
    public function getAllEmploymentStatuses();

    /**
     * Fetches employment status by id
     *
     * @param int $id
     * @return EmploymentStatus
     */
    public function getEmploymentStatusById(int $id): EmploymentStatus;
}
