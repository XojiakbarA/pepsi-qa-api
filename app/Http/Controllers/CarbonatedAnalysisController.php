<?php

namespace App\Http\Controllers;

use App\Filters\CarbonatedFilter;
use App\Http\Requests\Carbonated\FilterRequest;
use App\Http\Requests\Carbonated\StoreRequest;
use App\Http\Requests\Carbonated\UpdateRequest;
use App\Http\Resources\CarbonatedAnalysisResource;
use App\Models\CarbonatedAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarbonatedAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, CarbonatedFilter $filter) : ResourceCollection
    {
        $analyses = CarbonatedAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 20);

        return CarbonatedAnalysisResource::collection($analyses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarbonatedAnalysisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarbonatedAnalysis  $carbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(CarbonatedAnalysis $carbonatedAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarbonatedAnalysisRequest  $request
     * @param  \App\Models\CarbonatedAnalysis  $carbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, CarbonatedAnalysis $carbonatedAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarbonatedAnalysis  $carbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarbonatedAnalysis $carbonatedAnalysis)
    {
        //
    }
}
