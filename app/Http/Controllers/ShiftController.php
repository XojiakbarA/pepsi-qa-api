<?php

namespace App\Http\Controllers;

use App\Filters\ShiftFilter;
use App\Http\Requests\Shift\FilterRequest;
use App\Http\Requests\Shift\StoreRequest;
use App\Http\Requests\Shift\UpdateRequest;
use App\Http\Resources\ShiftResource;
use App\Models\Shift;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, ShiftFilter $filter) : ResourceCollection
    {
        $ts = strtotime($request->date ?? now());
        $date = date('Y-m-01', $ts);

        $shifts = Shift::filter($filter)->whereDate('date', '=', $date)->get();

        return ShiftResource::collection($shifts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Shift\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shift  $shifts
     * @return \Illuminate\Http\Response
     */
    public function show(Shift $shifts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shift  $shifts
     * @return \Illuminate\Http\Response
     */
    public function edit(Shift $shifts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Shift\UpdateRequest  $request
     * @param  \App\Models\Shift  $shifts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Shift $shifts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shift  $shifts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shift $shifts)
    {
        //
    }
}
