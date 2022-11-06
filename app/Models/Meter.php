<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    public function meter_area(){
        return $this->hasOne(Area::class, 'id', 'area_id');
    }

    public function meter_owner(){
        return $this->hasOne(Owner::class, 'id', 'owner_id');
    }

    public function meter_reading(){
        return $this->hasMany(Reading::class, 'id', 'meter_id');
    }

    public function bill_meter(){
        return $this->hasMany(Bill::class, 'meter_id', 'id');
    }
   


}
