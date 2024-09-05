<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
    public function sectors()
    {
        return $this->hasMany(Sector::class);
    }
}
