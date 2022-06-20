<?php

namespace App\Repositories\CivilStatuses;

use App\Models\CivilStatuses;

interface CivilStatusesRepositoryInterface
{
    /**
     * Fetches all civil statuses
     * 
     * @return CivilStatuses[]
     */
    public function getAllCivilStatuses(): array;

    /**
     * Fetches a specific civil status by ID
     * 
     * @return CivilStatuses
     */
    public function getCivilStatusById(int $id): CivilStatuses;
}