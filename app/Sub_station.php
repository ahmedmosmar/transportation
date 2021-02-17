<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_station extends Model
{
    
    protected $table="sub_stations";
    protected $primaryKey="sub_station_id";


    public function Station(){
        return $this->belongsTo(Station::class,'station_id','station_id');

    }
}
