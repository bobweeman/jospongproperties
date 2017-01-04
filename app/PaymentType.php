<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentType extends Model
{
    //setting soft deletes
    use SoftDeletes;

    //mass assignment properties
    protected $fillable=[
        'name','description'
    ];
}
