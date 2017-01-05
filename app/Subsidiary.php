<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subsidiary extends Model
{

    //use sofdeletes
    use SoftDeletes;
    //setting fillable fields
    protected $fillable=['name','telephone','address','web','email'];
}
