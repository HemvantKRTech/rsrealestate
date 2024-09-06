<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'images'];

    // Cast the images attribute to an array
    protected $casts = [
        'images' => 'array',
    ];
}
