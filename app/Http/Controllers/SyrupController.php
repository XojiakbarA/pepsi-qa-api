<?php

namespace App\Http\Controllers;

use App\Filters\SyrupFilter;
use App\Http\Requests\Syrup\FilterRequest;
use App\Http\Requests\Syrup\StoreRequest;
use App\Http\Requests\Syrup\UpdateRequest;
use App\Http\Resources\SyrupResource;
use App\Models\Syrup;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SyrupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, SyrupFilter $filter) : ResourceCollection
    {
        $syrups = Syrup::filter($filter)->paginate($request->per_page ?? 20);

        return SyrupResource::collection($syrups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Syrup\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Syrup\UpdateRequest  $request
     * @param  \App\Models\Syrup  $syrup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Syrup $syrup)
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
