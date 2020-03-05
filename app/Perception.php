<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perception extends Model
{
    protected $fillable = [
        'clubber_id','bizarre_alluring', 'introvert_exuberant', 'target_clubber_id'
    ];
}
