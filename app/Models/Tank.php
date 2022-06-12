<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tank extends Model
{
    use HasFactory;

    public function factory() : BelongsTo
    {
        return $this->belongsTo(Factory::class);
    }
}
