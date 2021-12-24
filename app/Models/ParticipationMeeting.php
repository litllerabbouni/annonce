<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationMeeting extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillables = [
        'uuid',
        'participation_id',
        'meeting_id',
        ['participation_id', 'meeting_id']
    ];
    
}
