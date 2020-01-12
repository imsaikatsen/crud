<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'name', 'email', 'group','phone_no',
    ];
}
