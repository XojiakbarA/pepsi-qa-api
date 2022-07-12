<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftMode extends Model
{
    use HasFactory;

    protected $casts = [
        'sequence' => 'array',
        'day' => 'array',
        'night' => 'array',
        'values' => 'array'
    ];
}
