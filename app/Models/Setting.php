<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];
    protected $casts = [
        'opening_time_from' => 'datetime',
        'opening_time_to' => 'datetime',
    ];
}
