<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Service extends Model
{
    protected $guarded = [];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
