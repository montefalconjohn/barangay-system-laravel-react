<?php

namespace App\Repositories\BarangayOfficials;

use App\Models\BarangayOfficial;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarangayOfficialRepository implements BarangayOfficialRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getBarangayOfficialById(int $id): BarangayOfficial
    {
        // Query
        $official = BarangayOfficial::with(
            [
                'barangay',
                'position',
                'civilStatus',
                'employmentStatus'
            ]
        )->get()->find($id);

        // If id doesnt exist, throw exception
        if (!$official) {
            throw new HttpException(500, "Barangay Official with {$id} does not exist.");
        }

        // Return data
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
