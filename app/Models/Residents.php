<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'purok',
        'address',
        'birthplace',
        'birthdate',
        'age',
        'occupation',
        'email',
        'citizenship',
        'civil_status_id'
    ];

    protected $hidden = ['updated_at', 'created_at'];

    // Residents has many blotters but blotters can only have one resident
    public function blotters()
    {
        // return $this
    }
}
