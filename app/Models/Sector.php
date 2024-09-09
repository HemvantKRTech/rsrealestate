<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status','city_id'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
