<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

  public function meter_reading(){
    return $this->hasOne(Meter::class, 'id', 'meter_id');
  }
  public function meter_owner(){
    return $this->hasone(Owner::class, 'id', 'meter_id');
  }


  public function meter_bill(){
    return $this->hasOne(Meter::class, 'id', 'meter_id');
}

  public function reading_bill(){
    return $this->hasOne(Bill::class, 'id', 'bill_id');
}

}
