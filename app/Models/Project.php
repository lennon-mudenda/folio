<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'client',
        'description',
        'start',
        'end',
        'url'
    ];


    protected $casts = [
        'name' => 'string',
        'client' => 'string',
        'description' => 'string',
        'start' => 'date',
        'end' => 'date',
        'url' => 'string'
    ];

    /**
     * Get all of the project's images.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
