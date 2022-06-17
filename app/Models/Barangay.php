<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;
    
    protected $table = "barangay";
    
    protected $fillable = [
        'name',
        'municipality', 
        'province', 
        'email', 
        'phone_number'
    ];  
    
    protected $hidden = ['updated_at', 'created_at'];

    public function barangayOfficials() 
    {
        return $this->hasMany(BarangayOfficial::class);
    }
}
