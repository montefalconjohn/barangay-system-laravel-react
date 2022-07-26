<?php

namespace App\Repositories\Residents;

use App\Repositories\Residents\ResidentRepositoryInterface;
use App\Models\Resident;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ResidentRepository implements ResidentRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function fetchResidentById(int $residentId): Resident
    {
        $resident = Resident::find($residentId);

        if (!$resident) {
            throw new HttpException(500, "Resident with {$residentId} does not exist.");
        }

        return $resident;
    }
}