<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizenship extends Model
{
    protected $fillable = ['citizenship'];

    protected $hidden = ['updated_at', 'created_at'];
}
