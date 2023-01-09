<?php

namespace App\Services\Barangay;

use App\Models\Barangay;
use App\Http\Requests\BarangayRequest;

interface BarangayServiceInterface
{
    /**
     * Fetches barangay information by ID
     *
     * @param int $id
     * @return Barangay
     */
    public function fetchBarangayInformationById(int $id): Barangay;

    /**
     * Create barangay
     *
     * @param BarangayRequest $request
     * @return Barangay
     */
    public function createBarangay(BarangayRequest $request): Barangay;

    /**
     * Updates a certain barangay by ID
     *
     * @param BarangayRequest $request
     * @param int $id
     */
    public function updateBarangay(BarangayRequest $request, int $id): void;

    /**
     * Delete barangay by ID
     *
     * @param int $id
     */
    public function deleteBarangay(int $id): void;
}
