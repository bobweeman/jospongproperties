<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class District extends Model
{
    //mass assignment
    protected $fillable=[
        'name',
        'city_id'
    ];


    //enable soft deletes
    use SoftDeletes;

    //setting relationships

    public function foo(){ //relationship between district and state/region
        return $this->belongsTo('\App\RegionState','region_state_id','id');
    }
}
