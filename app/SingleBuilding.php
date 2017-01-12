<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SingleBuilding extends Model
{
    //mass assignment
    protected $fillable=[
        'name','address','purchase_price','property_tax','square_feet','status','city_id','district_id','region_id',
        'country_id','tenant_id','purchaser_id','zoning','total_floor_area'
    ];



    //enable soft deletes
    use SoftDeletes;
    
    //defining relationship
    public function country(){//country relationship
        return $this->belongsTo('\App\Country','country_id','id');
    }

    public function city(){//city relationship
        return $this->belongsTo('\App\City','city_id','id');
    }
    public function district(){//district relationship
        return $this->belongsTo('\App\District','district_id','id');
    }
    public function region(){//region relationship
        return $this->belongsTo('\App\RegionState','region_id','id');
    }
    public function tenant(){//tenant relationship - single unit building
        return $this->belongsTo('\App\Tenant','tenant_id','id');
    }
    public function tenantCom(){//tenant relationship - single unit building
        return $this->belongsTo('\App\TenantCommercial','tenant_id','id');
    }
    public function purchaser(){//purchaser relationship - single unit building
        return $this->belongsTo('\App\Subsidiary','purchaser_id','id');
    }

    public function physical(){//physical relationship -
        return $this->hasOne('\App\Physical','building_id','real_id');

    }

//    //creating an accessor for ID
//    public function getIdAttribute($value){
//        return $this->attributes['id']= $value."_single";
//    }
//
//    //creating a mutator for ID
//    public function setIdAttribute($value){
//        $a= explode("_",$value,1);
//        $this->attributes['id']= $a[0];
//    }

//    //creating an accessor for tenant ID
//    public function getTenantIdAttribute($value){
//        return $this->attributes['tenant_id']= $value."_tenant";
//    }

//    //creating a mutator for tenant ID
//    public function setTenantIdAttribute($value){
//        $a= explode("_",$value,1);
//        $this->attributes['tenant_id']= $a[0];
//    }
}
