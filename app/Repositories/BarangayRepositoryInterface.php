<?php

namespace App\Repositories;

use App\Models\Barangay;

interface BarangayRepositoryInterface
{
    /**
     * Fetch a certain barangay by ID
     */
    public function getBarangayById(int $id): Barangay;
}