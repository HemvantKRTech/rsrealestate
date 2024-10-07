<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    const ADDED_BY_USER = 'user';
    const ADDED_BY_ADMIN = 'admin';
    protected $table = 'properties';
    protected $fillable = [
        'category_id',
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
        'price',
        'negotiable',
        'description',
        'hospital_distance',
        'atm_distance',
        'bank_distance',
        'railway_distance',
        'school_distance',
        'airport_distance',
        'address',
        'city_id',
        'sector_id',
        'ad_title',
        'images',
        'user_name',
        'user_email',
        'user_address'
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
