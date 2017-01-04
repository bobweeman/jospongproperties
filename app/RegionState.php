<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegionState extends Model
{
    //mass assignment
    protected $fillable=[
        'name'
    ];


    //enable soft deletes
    use SoftDeletes;
}
