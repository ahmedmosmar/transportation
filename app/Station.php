<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table="stations";
    protected $primaryKey="station_id";


    public function Sub_station(){
        return $this->hasMany(Sub_station::class,'station_id','station_id');
    }
}
