<?php

namespace App\Repositories;

use App\Models\BarangayOfficial;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarangayOfficialsRepository implements BarangayOfficialsRepositoryInterface
{
    public function getBarangayOfficialById(int $id): BarangayOfficial
    {
        $official = BarangayOfficial::with('barangay')->get()->find($id);

        if (!$official) {
            throw new HttpException(500, "Barangay Official with {$id} does not exist.");
        }

        return $official;
    }

    public function getBarangayOfficials()
    {
        return BarangayOfficial::all();
    }
}
