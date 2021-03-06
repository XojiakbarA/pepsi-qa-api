<?php

namespace App\Filters;

use App\Http\Requests\SecureSealTest\FilterRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SecureSealTestFilter extends QueryFilters
{
    protected Request $request;

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function syrup_id(int $term) : Builder
    {
        return $this->builder->where('syrup_id', $term);
    }

    public function product_ids(array $term) : Builder
    {
        return $this->builder->whereRelation('syrup', fn($q) => $q->whereIn('product_id', $term));
    }

    public function line_ids(array $term) : Builder
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
