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
        'start_term',
        'end_term'
    ];

    // Barangay official works in one barangay but barangay can have many barangay official
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

    // Barangay official works in one position but position can have many barangay official
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    // Barangay official has one civilStatus but civilStatus can have many barangay official
    public function civilStatus()
    {
        return $this->belongsTo(CivilStatus::class);
    }

    // Barangay official has one employmentStatus but employmentStatus can have many barangay official
    public function employmentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class);
    }
}
