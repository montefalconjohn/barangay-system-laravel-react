<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilStatus extends Model
{
    protected $fillable = ['civil_status_name'];

    protected $hidden = ['updated_at', 'created_at'];
}
