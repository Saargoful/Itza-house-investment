<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'property_type','type', 'images', 'rooms', 'bathrooms', 'amenities', 'location', 'land_area', 'construction_area'
    ];

    protected $casts = [
        'images' => 'array'
    ];
    protected $attributes = [
        'type' => 'default_value_if_needed',
    ];
}
