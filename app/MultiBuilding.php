<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MultiBuilding extends Model
{
    //mass assignment
    protected $fillable=[
        'name','address','district_id','city_id','country_id','purchase_price','property_tax','status','square_feet'
    ];


    //enable soft deletes
    use SoftDeletes;

    //creating relationships
    public function units(){
        return $this->hasMany('\App\Unit','id','unit_id');
    }
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
        return $this->belongsTo('\App\Region','region_id','id');
    }
}
