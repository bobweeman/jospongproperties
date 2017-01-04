<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //mass assignment
    protected $fillable=[
        'name','description','type'
    ];
    //enable softdeletes
    use SoftDeletes;
}
