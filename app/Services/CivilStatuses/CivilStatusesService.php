<?php

namespace App\Services\CivilStatuses;

use App\Services\CivilStatuses\CivilStatusesServiceInterface;
use App\Models\CivilStatuses;

class CivilStatusesService implements CivilStatusesServiceInterface
{
    /**
     * @inheritDoc
     */
    public function fetchCivilStatuses()
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchCivilStatusById(int $id): CivilStatuses
    {
        
    }

    /**
     * @inheritDoc
     */
    public function createCivilStatus($request): CivilStatuses
    {
        return CivilStatuses::create([
            'civil_status_name' => $request->civil_status_name
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateCivilStatusById($request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deleteCivilStatusById(int $id): void
    {
        
    }
}