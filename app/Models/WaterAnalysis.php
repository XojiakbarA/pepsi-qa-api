<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterAnalysis extends Model
{
    use HasFactory, Filterable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
