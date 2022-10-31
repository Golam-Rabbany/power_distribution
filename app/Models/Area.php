<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function area_meter(){
        return $this->hasMany(Meter::class, 'area_id', 'id');
    }
}
