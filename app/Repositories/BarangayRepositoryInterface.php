<?php

namespace App\Repositories\Barangays;

use App\Models\Barangay;

interface BarangayRepositoryInterface
{
    /**
     * Fetch a certain barangay by ID
     */
    public function getBarangayById(int $id): Barangay;
}