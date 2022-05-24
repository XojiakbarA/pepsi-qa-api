<?php

namespace App\Filters;

use App\Http\Requests\PhysicalChemicalAnalysis\FilterRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PhysicalChemicalAnalysisFilter extends QueryFilters
{
    protected Request $request;

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function product_ids(array $term) : Builder
    {
        return $this->builder->whereRelation('syrup', fn($q) => $q->whereIn('product_id', $term));
    }

    public function line_ids($term) : Builder
    {
        return $this->builder->whereIn('line_id', $term);
    }

    public function format_ids(array $term) : Builder
    {
        return $this->builder->whereIn('format_id', $term);
    }

    public function container_supplier_ids(array $term) : Builder
    {
        return $this->builder->whereIn('container_supplier_id', $term);
    }

    public function cap_ids(array $term) : Builder
    {
        return $this->builder->whereIn('cap_id', $term);
    }

    public function from(string $term) : Builder
    {
        return $this->builder->whereRelation('values', fn($q) => $q->where('created_at', '>', $term));
    }

    public function to(string $term) : Builder
    {
        return $this->builder->whereRelation('values', fn($q) => $q->where('created_at', '<', $term));
    }
}
