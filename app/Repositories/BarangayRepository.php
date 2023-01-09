<?php

namespace App\Repositories\Barangays;


use App\Models\Barangay;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarangayRepository implements BarangayRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getBarangayById(int $id): Barangay
    {
        // Get data
        $barangay = Barangay::with('barangayOfficials')->get()->find($id);

        // If Id doesnt exist, throw exception
        if (!$barangay) {
            throw new HttpException(500, "Barangay with {$id} does not exists.");
        }

        // Return data
        return $barangay;
    }
}
