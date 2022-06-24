<?php

namespace App\Services\Citizenship;

use App\Http\Requests\CitizenshipRequest;
use App\Services\Citizenship\CitizenshipServiceInterface;
use App\Models\Citizenship;
use App\Repositories\Citizenship\CitizenshipRepositoryInterface;

class CitizenshipService implements CitizenshipServiceInterface
{
    /** @var CitizenshipRepositoryInterface */
    private $citizenshipRepository;

    /**
     * CitizenshipService constructor.
     * 
     * @param CitizenshipRepositoryInterface $citizenshipRepository
     */
    public function __construct(CitizenshipRepositoryInterface $citizenshipRepository)
    {
        $this->citizenshipRepository = $citizenshipRepository;
    }

    /**
     * @inheritDoc
     */
    public function fetchAllCitizenships()
    {
        
    }

    /**
     * @inheritDoc
     */
    public function fetchCitizenshipById(int $id): Citizenship
    {
        
    }

    /**
     * @inheritDoc
     */
    public function createCitizenship(CitizenshipRequest $request): Citizenship
    {
        return Citizenship::create([
            'citizenship' => $request->citizenship
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateCitizenshipById(CitizenshipRequest $request, int $id): void
    {
        
    }

    /**
     * @inheritDoc
     */
    public function deleteCitizenshipById(int $id): void
    {
        
    }
}