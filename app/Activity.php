<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

    protected $fillable = [
        'TickleID', 'reference_id', 'activity_type','message'
    ];

}
