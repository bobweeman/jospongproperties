<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    //
    protected $fillable=[
        'building_id','plotted','plot_details','stamp_duty','stamp_duty_details','registered_deed','registered_deed_details','litigation_status',
        'litigation_status_details','contestant_name','head_conveyance','copy_conveyance','signed_indenture','copy_signed_indenture','lodgement_by','lodgement_to',
        'bar_coded_site_plan','land_title','land_status','registered_title','registered_title_details'
    ];

    //creating relationship
    public function SingleBuilding(){
        return $this->belongsTo('App\SingleBuilding','building_id','id');
    }
}
