<?php

namespace App\Repositories\EmploymentStatuses;

use App\Models\EmploymentStatuses;

interface EmploymentStatusesRepositoryInterface
{
    /**
     * Fetches all employment statuses
     */
    public function getAllEmploymentStatuses();

    /**
     * Fetches employment status by id 
     * 
     * @param int $id
     * 
     * @return EmploymentStatuses
     */
    public function getEmploymentStatusById(int $id): EmploymentStatuses;
}