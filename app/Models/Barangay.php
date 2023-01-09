<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barangay extends Model
{
    use HasFactory;

    protected $table = "barangays";

    protected $fillable = [
        'name',
        'municipality',
        'province',
        'email',
        'phone_number'
    ];

    protected $hidden = ['updated_at', 'created_at'];

    /**
     * Fetches all the associated barangay officials
     *
     * @return HasMany
     */
    public function barangayOfficials(): HasMany
    {
        return $this->hasMany(BarangayOfficial::class);
    }

    /**
     * Fetches all the associated residents
     *
     * @return HasMany
     */
    public function residents(): HasMany
    {
        return $this->hasMany(Resident::class);
    }
}
