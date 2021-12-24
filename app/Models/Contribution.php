<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'added_at',
        'contribution_year',
        'contribution_month',
        'amount',
        'periode_id',
        'user_benefit_id'
    ];
}
