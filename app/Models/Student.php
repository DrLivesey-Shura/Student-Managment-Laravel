<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'std_number',
        'name',
        'family_name',
        'dt_birth',
        'level',
        'picture'
    ];
}
