<?php

namespace App\Filters;

use App\Http\Requests\WaterAnalysis\FilterRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class WaterAnalysisFilter extends QueryFilters
{
    protected Request $request;

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function place(string $term) : Builder
    {
        return $this->builder->where('place', 'like', '%'.$term.'%');
    }

    public function hardness_min(float $term) : Builder
    {
        return $this->builder->where('hardness', '>=', $term);
    }
    public function hardness_max(float $term) : Builder
    {
        return $this->builder->where('hardness', '<=', $term);
    }

    public function tds_min(float $term) : Builder
    {
        return $this->builder->where('tds', '>=', $term);
    }
    public function tds_max(float $term) : Builder
    {
        return $this->builder->where('tds', '<=', $term);
    }

    public function alkalinity_min(float $term) : Builder
    {
        return $this->builder->where('alkalinity', '>=', $term);
    }
    public function alkalinity_max(float $term) : Builder
    {
        return $this->builder->where('alkalinity', '<=', $term);
    }

    public function conductivity_min(float $term) : Builder
    {
        return $this->builder->where('conductivity', '>=', $term);
    }
    public function conductivity_max(float $term) : Builder
    {
        return $this->builder->where('conductivity', '<=', $term);
    }

    public function turbidity_min(float $term) : Builder
    {
        return $this->builder->where('turbidity', '>=', $term);
    }
    public function turbidity_max(float $term) : Builder
    {
        return $this->builder->where('turbidity', '<=', $term);
    }

    public function temperature_min(float $term) : Builder
    {
        return $this->builder->where('temperature', '>=', $term);
    }
    public function temperature_max(float $term) : Builder
    {
        return $this->builder->where('temperature', '<=', $term);
    }

    public function cl_min(float $term) : Builder
    {
        return $this->builder->where('cl', '>=', $term);
    }
    public function cl_max(float $term) : Builder
    {
        return $this->builder->where('cl', '<=', $term);
    }

    public function mn_min(float $term) : Builder
    {
        return $this->builder->where('mn', '>=', $term);
    }
    public function mn_max(float $term) : Builder
    {
        return $this->builder->where('mn', '<=', $term);
    }

    public function fe_min(float $term) : Builder
    {
        return $this->builder->where('fe', '>=', $term);
    }
    public function fe_max(float $term) : Builder
    {
        return $this->builder->where('fe', '<=', $term);
    }

    public function user_ids(array $term) : Builder
    {
        return $this->builder->whereIn('user_id', $term);
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
