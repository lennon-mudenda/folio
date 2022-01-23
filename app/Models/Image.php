<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;


    protected $fillable = ['uri'];


    /**
     * Get the parent imageable model (project or post).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
