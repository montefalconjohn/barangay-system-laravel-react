<?php

namespace App\Repositories;

use App\Models\Citizenship;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CitizenshipRepository implements CitizenshipRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function fetchAllCitizenship()
    {
        return Citizenship::all();
    }

    /**
     * @inheritDoc
     */
    public function fetchCitizenshipById(int $id): Citizenship
    {
        $citizenship = Citizenship::find($id);

        if (!$citizenship) {
            throw new HttpException(500, "Citizenship with {$id} does not exist.");
        }

        return $citizenship;
    }
}