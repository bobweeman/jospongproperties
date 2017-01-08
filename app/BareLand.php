<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BareLand extends Model
{
    //mass assignment
    protected $fillable=[
        'name','address','purchase_price','property_tax','square_feet','status','city_id','district_id','region_id',
        'country_id','tenant_id','purchaser_id','zoning'
    ];

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
        return $this->belongsTo('\App\Region','region_id','id');
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

}
