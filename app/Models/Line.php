<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function format()
    {
        return $this->belongsTo(Format::class);
    }
    public function container()
    {
        return $this->belongsTo(Container::class);
    }
    public function containerSupplier()
    {
        return $this->belongsTo(ContainerSupplier::class);
    }
    public function cap()
    {
        return $this->belongsTo(Cap::class);
    }
}
