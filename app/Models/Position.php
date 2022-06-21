<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['position_name'];

    protected $hidden = ['updated_at', 'created_at'];
    
    public function barangayOfficials() 
    {
        return $this->hasMany(BarangayOfficial::class);
    }
}
