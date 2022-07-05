<?php

namespace App\Http\Controllers;

use App\Filters\WaterAnalysisFilter;
use App\Http\Requests\WaterAnalysis\FilterRequest;
use App\Http\Requests\WaterAnalysis\StoreRequest;
use App\Http\Requests\WaterAnalysis\UpdateRequest;
use App\Http\Resources\WaterAnalysisResource;
use App\Models\WaterAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WaterAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, WaterAnalysisFilter $filter) : ResourceCollection
    {
        $analyses = WaterAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 20);

        return WaterAnalysisResource::collection($analyses);
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
     * @param  \App\Http\Requests\WaterAnalysis\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WaterAnalysis  $waterAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(WaterAnalysis $waterAnalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaterAnalysis  $waterAnalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(WaterAnalysis $waterAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\WaterAnalysis\UpdateRequest  $request
     * @param  \App\Models\WaterAnalysis  $waterAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, WaterAnalysis $waterAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaterAnalysis  $waterAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaterAnalysis $waterAnalysis)
    {
        //
    }
}
