<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //setting relationships
    public function building(){
        return $this->belongsTo('\App\MultiBuilding','building_id','id');
    }

    public function tenant(){
        return $this->belongsTo('\App\Tenant','tenant_id','id');
    }

    public function tenantCom(){
        return $this->belongsTo('\App\TenantCommercial','tenant_id','id');
    }
    //mass assignment
    protected $fillable=[
        'name','building_id','status'
    ];
}
