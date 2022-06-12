<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTankRequest;
use App\Http\Requests\UpdateTankRequest;
use App\Http\Resources\TankResource;
use App\Models\Tank;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : ResourceCollection
    {
        $tanks = Tank::all();

        return TankResource::collection($tanks);
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
     * @param  \App\Http\Requests\StoreTankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function show(Tank $tank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Tank $tank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTankRequest  $request
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTankRequest $request, Tank $tank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tank  $tank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tank $tank)
    {
        //
    }
}
