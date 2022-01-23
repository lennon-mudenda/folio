<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'responded',
        'message'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'subject' => 'string',
        'responded' => 'boolean',
        'message' => 'string'
    ];
}
