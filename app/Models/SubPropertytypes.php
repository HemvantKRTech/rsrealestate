<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPropertytypes extends Model
{
    use HasFactory;
    protected $table = 'subproperty_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['property_type_id', 'name', 'status'];

    /**
     * Get the property type that owns the subproperty type.
     */
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }
}
