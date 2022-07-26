<?php

namespace App\Services\CivilStatuses;

use App\Models\CivilStatus;
use App\Http\Requests\CivilStatusesRequest;

interface CivilStatusServiceInterface
{
    /**
     * Fetches all civil statuses
     */
    public function fetchCivilStatuses();

    /**
     * Fetches civil status by id
     * 
     * @param int $id
     * 
     * @return CivilStatuses
     */
    public function fetchCivilStatusById(int $id): CivilStatus;

    /**
     * Create Civil Status
     * 
     * @param CivilStatusesRequest $request
     * 
     * @return CivilStatus
     */
    public function createCivilStatus($request): CivilStatus;

    /**
     * Update a specific civil status name by id
     * 
     * @param $request
     * @param int $id
     * 
     * @return void
     */
    public function updateCivilStatusById($request, int $id): void;

    /**
     * Delete Civil Status by Id
     * 
     * @param int $id
     * 
     * @return void
     */
    public function deleteCivilStatusById(int $id): void;
}

