<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $fillable = ['name', 'about', 'contact'];

    protected $casts = [
        'name' => 'string',
        'about' => 'string',
        'contact' => 'string',
    ];
}
