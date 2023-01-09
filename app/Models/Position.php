<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    protected $fillable = ['position_name'];

    protected $hidden = ['updated_at', 'created_at'];


    /**
     * One position can have many barangay officials
     *
     * @return HasMany
     */
    public function barangayOfficials(): HasMany
    {
        return $this->hasMany(BarangayOfficial::class);
    }
}
