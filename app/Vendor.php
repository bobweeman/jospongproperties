<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    //mass assignment
    protected $fillable=[
        'name','contact_name','phone','address','email','city_id','country_id'
    ];
    //softdeletes
    use SoftDeletes;


    //creating relationships
    public function myCity(){ //city relationship
        return $this->belongsTo('\App\City','city_id','id');
    }

    public function myCountry(){ //city relationship
        return $this->belongsTo('\App\Country','country_id','id');
    }
}
