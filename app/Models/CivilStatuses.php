<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CivilStatuses extends Model
{
    protected $fillable = ['civil_status_name'];

    protected $hidden = ['updated_at', 'created_at'];
}
