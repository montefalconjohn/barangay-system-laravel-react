<?php

namespace App\Services\Barangay;

use App\Models\Barangay;
use App\Services\Barangay\BarangayServiceInterface;
use App\Repositories\BarangayRepositoryInterface;

class BarangayService implements BarangayServiceInterface 
{
    /** @var BarangayRepositoryInterface */
    private $barangayRepository;

    /**
     * BarangayService constructor
     * 
     * @param BarangayRepositoryInterface $barangayRepository
     */
    public function __construct(BarangayRepositoryInterface $barangayRepository)
    {
        $this->barangayRepository = $barangayRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchBarangayInformationById(int $id): Barangay
    {
        return $this->barangayRepository->getBarangayById($id);
        // var_dump($this->barangayRepository->getBarangayById($id));
    }

    /**
     * @inheritDoc
     */
    public function createBarangay($request): Barangay
    {
        return Barangay::create([
            'name' => $request->name,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateBarangay($request, int $id): void
    {
        $barangay = $this->barangayRepository->getBarangayById($id);

        $barangay->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteBarangay(int $id): void
    {
        $barangay = $this->barangayRepository->getBarangayById($id);

        $barangay->delete();
    }
}
