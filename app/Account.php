<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    //mass assigment
    protected $fillable=[
        'name','type','description','financial_institution'
    ];

    //enable soft deletes
    use SoftDeletes;

}
