<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonCarbonatedAnalysis extends Model
{
    use HasFactory, Filterable;

    public function syrup()
    {
        return $this->belongsTo(Syrup::class);
    }
    public function line()
    {
        return $this->belongsTo(Line::class);
    }
    public function containerSupplier()
    {
        return $this->belongsTo(ContainerSupplier::class);
    }
    public function format()
    {
        return $this->belongsTo(Format::class);
    }
    public function cap()
    {
        return $this->belongsTo(Cap::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
