<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class QueryFilters
{
    protected Request $request;
    protected Builder $builder;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filters() : array
    {
        return $this->request->all();
    }

    public function apply(Builder $builder) : Builder
    {
        $this->builder = $builder;

        foreach ($this->filters() as $name => $value) :
            if (!method_exists($this, $name)) :
                continue;
            endif;
            if (isset($value)) :
                $this->$name($value);
            else :
                $this->$name();
            endif;
        endforeach;

        return $this->builder;
    }
}
