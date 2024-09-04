<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'dynFrm_property_for',
        'dynFrm_property_category',
        'dynFrm_area',
        'dynFrm_unit_measure',
        'dynFrm_price',
        'dynFrm_price_measure',
        'dynFrm_property_facing',
        'dynFrm_property_image_file',
        'dynFrm_property_description',
        'property_dynFrm_address',
        'property_dynFrm_city',
        'property_dynFrm_city_state_2',
        'dynFrm_your_name',
        'personal_dynFrm_email_id',
        'personal_dynFrm_address',
        'personal_dynFrm_city_state',
        'personal_dynFrm_country_2',
        'personal_dynFrm_phone_mobile',
    ];
}
