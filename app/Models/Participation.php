<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'added_day',
        'added_month',
        'added_year',
        'group_id',
        'enrol_id'
    ];
    
}
