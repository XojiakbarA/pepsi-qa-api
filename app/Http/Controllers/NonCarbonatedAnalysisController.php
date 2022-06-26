<?php

namespace App\Http\Controllers;

use App\Filters\NonCarbonatedFilter;
use App\Http\Requests\NonCarbonated\FilterRequest;
use App\Http\Requests\NonCarbonated\StoreRequest;
use App\Http\Requests\NonCarbonated\UpdateRequest;
use App\Http\Resources\NonCarbonatedAnalysisResource;
use App\Models\NonCarbonatedAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NonCarbonatedAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, NonCarbonatedFilter $filter) : ResourceCollection
    {
        $analyses = NonCarbonatedAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 20);

        return NonCarbonatedAnalysisResource::collection($analyses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNonCarbonatedAnalysisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonCarbonatedAnalysis  $nonCarbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(NonCarbonatedAnalysis $nonCarbonatedAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonCarbonatedAnalysisRequest  $request
     * @param  \App\Models\NonCarbonatedAnalysis  $nonCarbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, NonCarbonatedAnalysis $nonCarbonatedAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonCarbonatedAnalysis  $nonCarbonatedAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonCarbonatedAnalysis $nonCarbonatedAnalysis)
    {
        //
    }
}
