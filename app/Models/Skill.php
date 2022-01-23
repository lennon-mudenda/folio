<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    protected $fillable = ['icon', 'name', 'description'];

    protected $casts = [
        'icon' => 'string',
        'name' => 'string',
        'description' => 'string',
    ];

}
