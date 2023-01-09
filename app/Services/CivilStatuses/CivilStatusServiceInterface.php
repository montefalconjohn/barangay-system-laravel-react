<?php

namespace App\Services\CivilStatuses;

use App\Models\CivilStatus;
use App\Http\Requests\CivilStatusRequest;

interface CivilStatusServiceInterface
{
    /**
     * Fetches all civil statuses
     *
     * @return mixed
     */
    public function fetchCivilStatuses();

    /**
     * Fetches civil status by id
     *
     * @param int $id
     * @return CivilStatus
     */
    public function fetchCivilStatusById(int $id): CivilStatus;

    /**
     * Create Civil Status
     *
     * @param CivilStatusRequest $request
     * @return CivilStatus
     */
    public function createCivilStatus(CivilStatusRequest $request): CivilStatus;

    /**
     * Update a specific civil status name by id
     *
     * @param CivilStatusRequest $request
     * @param int $id
     * @return void
     */
    public function updateCivilStatusById(CivilStatusRequest $request, int $id): void;

    /**
     * Delete Civil Status by Id
     *
     * @param int $id
     * @return void
     */
    public function deleteCivilStatusById(int $id): void;
}
