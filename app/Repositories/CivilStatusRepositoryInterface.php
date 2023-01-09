<?php

namespace App\Repositories\CivilStatuses;

use App\Models\CivilStatus;

interface CivilStatusRepositoryInterface
{
    /**
     * Fetches all civil statuses
     */
    public function getAllCivilStatuses();

    /**
     * Fetches a specific civil status by ID
     *
     * @param int $id
     * @return CivilStatus
     */
    public function getCivilStatusById(int $id): CivilStatus;
}
