<?php

namespace App\Repositories\Citizenship;

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
        // Find citizen by id
        $citizenship = Citizenship::find($id);

        // If id doesnt exist, throw exception
        if (!$citizenship) {
            throw new HttpException(500, "Citizenship with {$id} does not exist.");
        }

        // Return data
        return $citizenship;
    }
}
