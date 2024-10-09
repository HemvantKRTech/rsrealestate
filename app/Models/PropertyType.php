<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];
    public function properties()
    {
        return $this->hasMany(Property::class, 'type');
    }
    public function subpropertyType()
    {
        return $this->hasMany(SubPropertytypes::class,'property_type_id','id');
    }
}
