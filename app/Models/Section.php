<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'index'
    ];


    protected $casts = [
        'body' => 'string',
        'index' => 'integer'
    ];

    /**
     * Get the section's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
