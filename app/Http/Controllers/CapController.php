<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCapRequest;
use App\Http\Requests\UpdateCapRequest;
use App\Http\Resources\CapResource;
use App\Models\Cap;

class CapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caps = Cap::all();

        return CapResource::collection($caps);
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
     * @param  \App\Http\Requests\StoreCapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function show(Cap $cap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function edit(Cap $cap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCapRequest  $request
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapRequest $request, Cap $cap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cap  $cap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cap $cap)
    {
        //
    }
}
