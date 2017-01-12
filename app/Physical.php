<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
    //
    protected $fillable=[
      'fenced','fence_type','gated','gate_type','occupier','vulnerability','encroached','encroach_details','building_id'
    ];

    //creating relationships
    public function SingleBuilding(){
        return $this->hasOne('App\SingleBuilding','real_id','building_id');
    }

    public function BareLand(){ //bareland relationship
        return $this->hasOne('App\BareLand','real_id','building_id');
    }
    public function MultiBuilding(){//multi building relationship
        return $this->hasOne('App\MultiBuilding','real_id','building_id');
    }
}
