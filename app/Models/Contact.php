<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'country',
        'inquiry_type',
        'details',
    ];
}
