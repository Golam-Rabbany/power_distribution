<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function owner_meter(){
        return $this->hasMany(Meter::class, 'meter_id', 'id');
    }
}
