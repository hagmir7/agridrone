<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'city_province',
        'address',
        'crop_type',
        'area_hectares',
        'preferred_intervention_date',
    ];

    protected $casts = [
        'area_hectares' => 'decimal:2',
        'preferred_intervention_date' => 'date',
    ];
}
