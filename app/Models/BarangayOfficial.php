<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangayOfficial extends Model
{

    protected $fillable = [
        'barangay_id',
        'first_name',
        'last_name',
        'status',
        'age',
        'civil_status',
        'gender',
        'birthplace',
        'birthdate',
        'phone_number',
        'email',
        'purok',
        'term'
    ];

    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }
}
