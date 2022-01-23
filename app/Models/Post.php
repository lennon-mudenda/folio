<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title'];


    protected $casts = ['title'];


    /**
     * Get the post's cover image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
