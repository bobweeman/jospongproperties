<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MultiBuilding extends Model
{
    //mass assignment
    protected $fillable=[
        'name','address','district_id','city_id','country_id','purchase_price','property_tax','status','square_feet','region_id','total_floor_area'
    ];


    //enable soft deletes
    use SoftDeletes;

    //creating relationships
    public function units(){
        return $this->hasMany('\App\Unit','building_id','id');
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
        return $this->belongsTo('\App\RegionState','region_id','id');
    }
    public function physical(){//physical relationship -
        return $this->hasOne('\App\Physical','building_id','real_id');

    }
    public function legal(){//purchaser relationship -
        return $this->hasOne('\App\Physical','building_id','real_id');

    }

}
