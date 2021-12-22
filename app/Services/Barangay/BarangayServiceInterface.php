<?php

namespace App\Services\Barangay;

use App\Models\Barangay;
use App\Http\Requests\BarangayRequest;

interface BarangayServiceInterface
{
    /**
     * Fetches barangay information by ID
     */
    public function fetchBarangayInformationById(int $id): Barangay;

    /**
     * Create barangay
     */
    public function createBarangay($request): Barangay;

    /**
     * Updates a certain barangay by ID
     */
    public function updateBarangay($request, int $id): void;

    /**
     * Delete barangay by ID
     */
    public function deleteBarangay(int $id): void;
}