<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    //


    //creating an accessor
    public function getFullNameAttribute(){
        return $this->first_name." ".$this->last_name;
    }

    //mass assignment
    protected $fillable=[
      'first_name','last_name','address','city_id','country_id','work_phone','email','status','dob','home_phone','cell_phone'
    ];

//creating relationships
    public function city(){
        return $this->belongsTo('App\City','city_id','id');
    }

//creating relationships
    public function country(){
        return $this->belongsTo('App\Country','country_id','id');
    }
//creating relationships
    public function building(){
        return $this->belongsTo('App\Building','building_id','id');
    }
//creating relationships
    public function unit(){
        return $this->belongsTo('App\Unit','unit_id','id');
    }


    //enable soft deletes
    use SoftDeletes;
}
