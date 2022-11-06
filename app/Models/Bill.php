<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    

    public function bill_meter(){
        return $this->hasOne(Meter::class, 'id', 'meter_id');
    }


    
}
