<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concurso
 *
 * @property string $name
 * @property string $about
 * @property int $year
 * @property int $institute_id
 */
class Concurso extends Model
{
    // proctected $table = 'concursos';
    protected $fillable = ['name', 'about', 'year', 'institute_id'];

    protected $casts = [
        'name' => 'string',
        'about' => 'string',
        'year' => 'integer',
        'institute_id' => 'integer',
    ];

    public function Institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
