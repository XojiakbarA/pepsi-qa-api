<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Syrup extends Model
{
    use HasFactory, Filterable;

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function tank() : BelongsTo
    {
        return $this->belongsTo(Tank::class);
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function invertedSyrup() : HasOne
    {
        return $this->hasOne(InvertedSyrup::class);
    }
}
