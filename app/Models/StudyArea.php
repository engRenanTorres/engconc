<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyArea extends Model
{
    protected $fillable = ['name', 'about'];

    protected $casts = [
        'name' => 'string',
        'about' => 'string',
    ];
}
