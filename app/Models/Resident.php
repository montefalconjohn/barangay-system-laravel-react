<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    // Many residents has one barangay
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

    // Many residents has one citizenship
    public function citizenship()
    {
        return $this->belongsTo(Citizenship::class);
    }
    
    // Many residents has one citizenship
    public function civilStatus()
    {
        return $this->belongsTo(CivilStatus::class);
    }

    // Residents has many blotters but blotters can only have one resident
    public function blotters()
    {
        // return $this
    }
}
