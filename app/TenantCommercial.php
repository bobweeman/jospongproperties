<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TenantCommercial extends Model
{
    //mass assignment properties
    protected $fillable=[
        'contact_name','company_name','building_id','unit_id','address','city_id','country_id',
        'phone_number','fax_number','company_number','email','status'
    ];

    //creating an accessor
    public function getFullNameAttribute(){
        return $this->contact_name. " - (".$this->company_name.")";
    }
//    //creating an accessor
//    public function getIdAttribute($value){
//        return $this->attributes['id']= $value."_tenantCom";
//    }
//
//    //creating a mutator
//    public function setIdAttribute($value){
//        $a= explode("_",$value,1);
//        $this->attributes['id']= $a[0];
//    }


    //enable soft deletes
    use SoftDeletes;


    //creating relationships
    public function build(){ //building relationship
        return $this->belongsTo('\App\Building','building_id','id');
    }
    public function unit(){ //unit relationship
        return $this->belongsTo('\App\Unit','unit_id','id');
    }
    public function city(){ //city relationship
        return $this->belongsTo('\App\City','city_id','id');
    }
    public function country(){ //country relationship
        return $this->belongsTo('\App\Country','country_id','id');
    }

}
