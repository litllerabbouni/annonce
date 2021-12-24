<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationBenefit extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'added_at',
        'occurred_at',
        'takeplace',
        'description',
        'participation_id',
        'benefit_id',
        ['participation_id', 'benefit_id'],
        'created_by',
        'updated_by'
    ];

}
