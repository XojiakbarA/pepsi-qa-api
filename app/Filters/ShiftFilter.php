<?php

namespace App\Filters;

use App\Http\Requests\Shift\FilterRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ShiftFilter extends QueryFilters
{
    protected Request $request;

    public function __construct(FilterRequest $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }

    public function user_ids(array $term) : Builder
    {
        return $this->builder->whereIn('user_id', $term);
    }
}
