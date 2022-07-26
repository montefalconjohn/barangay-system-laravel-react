<?php

namespace App\Repositories\Barangays;


use App\Models\Barangay;
use App\Repositories\Barangays\BarangayRepositoryInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarangayRepository implements BarangayRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getBarangayById(int $id): Barangay
    {
        $barangay = Barangay::with('barangayOfficials')->get()->find($id);

        if (!$barangay) {
            throw new HttpException(500, "Barangay with {$id} does not exists.");
        }

        return $barangay;
    }
}