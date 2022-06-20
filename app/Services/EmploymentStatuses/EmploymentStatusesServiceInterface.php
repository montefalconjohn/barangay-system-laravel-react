<?php

namespace App\Services\EmploymentStatuses;

use App\Models\EmploymentStatuses;
use App\Http\Requests\EmploymentStatusesRequest;

interface EmploymentStatusesServiceInterface
{
    /**
     * Fetches all Employment statuses
     */
    public function fetchAllEmploymentStatuses();

    /**
     * Fetches status by id
     * 
     * @Param int $id
     * 
     * @return EmploymentStatues
     */
    public function fetchEmploymentStatusById(int $id): EmploymentStatuses;

    /**
     * Create employment status
     * 
     * @param EmploymentStatusesRequest $request
     */
    public function createEmploymentStatus($request): EmploymentStatuses;

    /**
     * Update a specific employment status by id
     * 
     * @param EmploymentStatusesRequest $request
     * @param int $id
     * 
     * @return void
     */
    public function updateEmploymentStatusById($request, int $id): void;

    /**
     * Delete Employment status by Id
     * 
     * @param int $id
     * 
     * @return void
     */
    public function deleteEmploymentStatusById(int $id): void;
}