<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'clubber_id',
        'target_clubber_id',
        'event_type',

    ];

    protected $attributes = [
        'target_clubber_id' => 0,
    ];
}