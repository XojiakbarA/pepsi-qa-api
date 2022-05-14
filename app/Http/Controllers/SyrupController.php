<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSyrupRequest;
use App\Http\Requests\UpdateSyrupRequest;
use App\Models\Syrup;

class SyrupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSyrupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSyrupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Syrup  $syrup
     * @return \Illuminate\Http\Response
     */
    public function show(Syrup $syrup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Syrup  $syrup
     * @return \Illuminate\Http\Response
     */
    public function edit(Syrup $syrup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSyrupRequest  $request
     * @param  \App\Models\Syrup  $syrup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSyrupRequest $request, Syrup $syrup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Syrup  $syrup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syrup $syrup)
    {
        //
    }
}
