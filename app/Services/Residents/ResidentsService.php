<?php

namespace App\Services\Residents;

use App\Http\Requests\ResidentsRequest;
use App\Services\Residents\ResidentsServiceInterface;
use App\Models\Residents;

class ResidentsService implements ResidentsServiceInterface
{
    public function fetchAllResidentsByBaranggayId(int $baranggayId)
    {
        
    }

    public function fetchResidentById(int $id): Residents
    {
        
    }

    public function createResident(ResidentsRequest $request): Residents
    {
        
    }

    public function updateResidentById(ResidentsRequest $request, int $id): void
    {
        
    }

    public function deleteResidentById(int $id): void
    {
        
    }
}