<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = [
        'type',
        'bedrooms',
        'bathrooms',
        'furnishing',
        'construction_status',
        'listed_by',
        'super_builtup_area',
        'carpet_area',
        'maintenance',
        'total_floors',
        'floor_no',
        'car_parking',
        'facing',
        'project_name',
        'ad_title',
        'description',
        'address',
        'price',
        'status',
        'added_by',
        'hospital_distance',
        'atm_distance',
        'railway_distance',
        'school_distance',
        'airport_distance',
        'bank_distance',
    ];
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class, 'type');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
}
