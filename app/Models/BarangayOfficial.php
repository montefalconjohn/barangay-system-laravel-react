<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangayOfficial extends Model
{

    protected $fillable = [
        'barangay_id',
        'position_id',
        'civil_status_id',
        'employment_status_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'birthplace',
        'birthdate',
        'phone_number',
        'email',
        'purok',
        'term'
    ];

    // Barangay official has one barangay but barangay can have many barangay official
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

    // Barangay official has one barangay but barangay can have many barangay official
    public function position()
    {
        return $this->hasOne(Position::class);
    }

    // Barangay official has one barangay but civil status can have many barangay official
    public function civilStatus()
    {
        return $this->hasOne(CivilStatuses::class);
    }

    // Barangay official has one barangay but employment status can have many barangay official
    public function employmentStatus()
    {
        return $this->hasOne(EmploymentStatuses::class);
    }
}
