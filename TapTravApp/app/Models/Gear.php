<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{
    protected $fillable = ['user_id', 'items'];

    protected $casts = [
        'items' => 'array', // JSON <-> array
    ];
}
