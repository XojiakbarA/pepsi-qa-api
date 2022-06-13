<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shift extends Model
{
    use HasFactory, Filterable;

    protected $fillable = ['user_id', 'factory_id', 'shift_mode_id', 'date', 'shift_values'];

    protected $casts = [
        'shift_values' => 'array'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function factory() : BelongsTo
    {
        return $this->belongsTo(Factory::class);
    }
    public function shiftMode() : BelongsTo
    {
        return $this->belongsTo(ShiftMode::class);
    }
}
