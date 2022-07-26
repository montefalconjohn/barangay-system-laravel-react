<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    protected $fillable = ['employment_status'];

    protected $hidden = ['updated_at', 'created_at'];
}
