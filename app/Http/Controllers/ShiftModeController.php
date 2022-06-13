<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShiftModeRequest;
use App\Http\Requests\UpdateShiftModeRequest;
use App\Http\Resources\ShiftModeResource;
use App\Models\ShiftMode;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShiftModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : ResourceCollection
    {
        $shiftModes = ShiftMode::all();

        return ShiftModeResource::collection($shiftModes);
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
     * @param  \App\Http\Requests\StoreShiftModeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShiftModeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShiftMode  $shiftMode
     * @return \Illuminate\Http\Response
     */
    public function show(ShiftMode $shiftMode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShiftMode  $shiftMode
     * @return \Illuminate\Http\Response
     */
    public function edit(ShiftMode $shiftMode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShiftModeRequest  $request
     * @param  \App\Models\ShiftMode  $shiftMode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShiftModeRequest $request, ShiftMode $shiftMode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShiftMode  $shiftMode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShiftMode $shiftMode)
    {
        //
    }
}
