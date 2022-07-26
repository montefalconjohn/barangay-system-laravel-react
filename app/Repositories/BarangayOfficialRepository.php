<?php

namespace App\Repositories;

use App\Models\BarangayOfficial;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarangayOfficialRepository implements BarangayOfficialRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getBarangayOfficialById(int $id): BarangayOfficial
    {
        $official = BarangayOfficial::with(['barangay', 'position', 'civilStatus', 'employmentStatus'])->get()->find($id);

        if (!$official) {
            throw new HttpException(500, "Barangay Official with {$id} does not exist.");
        }

        return $official;
    }

    /**
     * @inheritDoc
     */
    public function getBarangayOfficials()
    {
        return BarangayOfficial::with(['barangay', 'position', 'civilStatus', 'employmentStatus'])->get();
    }
}
