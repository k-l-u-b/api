<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubber extends Model
{
    protected $fillable = [
        'name','money','satisfaction', 'bizarre_alluring', 'introvert_exuberant'
    ];
}