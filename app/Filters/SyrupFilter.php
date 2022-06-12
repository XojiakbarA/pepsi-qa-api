<?php

namespace App\Filters;

use App\Http\Requests\Syrup\FilterRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SyrupFilter extends QueryFilters
{
    protected Request $request;

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function id(int $term) : Builder
    {
        return $this->builder->where('id', $term);
    }

    public function product_ids(array $term) : Builder
    {
        return $this->builder->whereIn('product_id', $term);
    }

    public function tank_ids(array $term) : Builder
    {
        return $this->builder->whereIn('tank_id', $term);
    }

    public function user_ids(array $term) : Builder
    {
        return $this->builder->whereIn('user_id', $term);
    }

    public function volume_min(float $term) : Builder
    {
        return $this->builder->where('volume', '>=', $term);
    }
    public function volume_max(float $term) : Builder
    {
        return $this->builder->where('volume', '<=', $term);
    }

    public function sugar_syrup_brix_min(float $term) : Builder
    {
        return $this->builder->where('sugar_syrup_brix', '>=', $term);
    }
    public function sugar_syrup_brix_max(float $term) : Builder
    {
        return $this->builder->where('sugar_syrup_brix', '<=', $term);
    }

    public function blend_syrup_brix_min(float $term) : Builder
    {
        return $this->builder->where('blend_syrup_brix', '>=', $term);
    }
    public function blend_syrup_brix_max(float $term) : Builder
    {
        return $this->builder->where('blend_syrup_brix', '<=', $term);
    }

    public function drink_brix_min(float $term) : Builder
    {
        return $this->builder->where('drink_brix', '>=', $term);
    }
    public function drink_brix_max(float $term) : Builder
    {
        return $this->builder->where('drink_brix', '<=', $term);
    }

    public function blend_density_min(float $term) : Builder
    {
        return $this->builder->where('blend_density', '>=', $term);
    }
    public function blend_density_max(float $term) : Builder
    {
        return $this->builder->where('blend_density', '<=', $term);
    }

    public function drink_density_min(float $term) : Builder
    {
        return $this->builder->where('drink_density', '>=', $term);
    }
    public function drink_density_max(float $term) : Builder
    {
        return $this->builder->where('drink_density', '<=', $term);
    }

    public function drink_inverted_brix_min(float $term) : Builder
    {
        return $this->builder->where('drink_inverted_brix', '>=', $term);
    }
    public function drink_inverted_brix_max(float $term) : Builder
    {
        return $this->builder->where('drink_inverted_brix', '<=', $term);
    }

    public function drink_acidity_min(float $term) : Builder
    {
        return $this->builder->where('drink_acidity', '>=', $term);
    }
    public function drink_acidity_max(float $term) : Builder
    {
        return $this->builder->where('drink_acidity', '<=', $term);
    }

    public function drink_ph_min(float $term) : Builder
    {
        return $this->builder->where('drink_ph', '>=', $term);
    }
    public function drink_ph_max(float $term) : Builder
    {
        return $this->builder->where('drink_ph', '<=', $term);
    }

    public function target_min(float $term) : Builder
    {
        return $this->builder->whereRelation('invertedSyrup', fn($q) => $q->where('target', '>=', $term));
    }
    public function target_max(float $term) : Builder
    {
        return $this->builder->whereRelation('invertedSyrup', fn($q) => $q->where('target', '<=', $term));
    }

    public function from(string $term) : Builder
    {
        return $this->builder->where('created_at', '>=', $term);
    }
    public function to(string $term) : Builder
    {
        return $this->builder->where('created_at', '<=', $term);
    }
}
