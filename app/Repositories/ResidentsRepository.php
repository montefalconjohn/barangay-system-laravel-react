<?php

namespace App\Repositories\Residents;

use App\Repositories\Residents\ResidentsRepositoryInterface;
use App\Models\Residents;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ResidentsRepository implements ResidentsRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function fetchAllResidentsByBarangayId(int $barangayId)
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchResidentById(int $residentId): Residents
    {
        $resident = Residents::find($residentId);

        if (!$resident) {
            throw new HttpException(500, "Resident with {$residentId} does not exist.");
        }

        return $resident;
    }
}