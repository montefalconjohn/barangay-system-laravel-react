<?php

namespace App\Services\Citizenship;

use App\Http\Requests\CitizenshipRequest;
use App\Services\Citizenship\CitizenshipServiceInterface;
use App\Models\Citizenships;
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
        return $this->citizenshipRepository->fetchAllCitizenship();
    }

    /**
     * @inheritDoc
     */
    public function fetchCitizenshipById(int $id): Citizenships
    {
        return $this->citizenshipRepository->fetchCitizenshipById($id);
    }

    /**
     * @inheritDoc
     */
    public function createCitizenship(CitizenshipRequest $request): Citizenships
    {
        return Citizenships::create([
            'citizenship' => $request->citizenship
        ]);
    }

    /**
     * @inheritDoc
     */
    public function updateCitizenshipById(CitizenshipRequest $request, int $id): void
    {
        $citizen = $this->citizenshipRepository->fetchCitizenshipById($id);

        $citizen->fill($request->input())->save();
    }

    /**
     * @inheritDoc
     */
    public function deleteCitizenshipById(int $id): void
    {
        $citizen = $this->citizenshipRepository->fetchCitizenshipById($id);

        $citizen->delete();
    }
}