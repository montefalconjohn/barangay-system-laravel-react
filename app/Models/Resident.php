<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resident extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birthdate',
        'birthplace',
        'age',
        'zone',
        'household',
        'household_number',
        'blood_type',
        'occupation',
        'religion',
        'gender',
        'address',
        'phone_number',
        'email',
        'barangay_id',
        'citizenship_id',
        'civil_status_id',
    ];

    protected $hidden = ['updated_at', 'created_at'];

    /**
     * Many residents has one barangay
     *
     * @return BelongsTo
     */
    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }

    /**
     * Many residents has one citizenship
     *
     * @return BelongsTo
     */
    public function citizenship(): BelongsTo
    {
        return $this->belongsTo(Citizenship::class);
    }

    /**
     * Many residents has one citizenship
     *
     * @return BelongsTo
     */
    public function civilStatus(): BelongsTo
    {
        return $this->belongsTo(CivilStatus::class);
    }

    // Residents has many blotters but blotters can only have one resident
    public function blotters(): BelongsTo
    {
        // return $this
    }
}
