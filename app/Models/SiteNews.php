<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteNews extends Model
{
    use HasFactory;
    protected $table = 'sitenews';

    // Fillable properties
    protected $fillable = [
        'news',
        'status',
    ];
}
