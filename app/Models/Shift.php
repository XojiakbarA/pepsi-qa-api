<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory, Filterable;

    protected $casts = [
        'shift_values' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
