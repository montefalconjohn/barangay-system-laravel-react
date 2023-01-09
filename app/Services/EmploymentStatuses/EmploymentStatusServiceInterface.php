<?php

namespace App\Services\EmploymentStatuses;

use App\Models\EmploymentStatus;
use App\Http\Requests\EmploymentStatusRequest;

interface EmploymentStatusServiceInterface
{
    /**
     * Fetches all Employment statuses
     */
    public function fetchAllEmploymentStatuses();

    /**
     * Fetches status by id
     *
     * @param int $id
     * @return EmploymentStatus
     */
    public function fetchEmploymentStatusById(int $id): EmploymentStatus;

    /**
     * Create employment status
     *
     * @param EmploymentStatusRequest $request
     * @return EmploymentStatus
     */
    public function createEmploymentStatus(EmploymentStatusRequest $request): EmploymentStatus;

    /**
     * Update a specific employment status by id
     *
     * @param EmploymentStatusRequest $request
     * @param int $id
     * @return void
     */
    public function updateEmploymentStatusById(EmploymentStatusRequest $request, int $id): void;

    /**
     * Delete Employment status by Id
     *
     * @param int $id
     * @return void
     */
    public function deleteEmploymentStatusById(int $id): void;
}
