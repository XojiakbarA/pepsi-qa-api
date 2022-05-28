<?php

namespace App\Http\Controllers;

use App\Filters\SectionWeightAnalysisFilter;
use App\Http\Requests\SectionWeightAnalysis\FilterRequest;
use App\Http\Requests\SectionWeightAnalysis\StoreRequest;
use App\Http\Requests\SectionWeightAnalysis\UpdateRequest;
use App\Http\Resources\SectionWeightAnalysisResource;
use App\Models\SectionWeightAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SectionWeightAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, SectionWeightAnalysisFilter $filter) : ResourceCollection
    {
        $analyses = SectionWeightAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 6);

        return SectionWeightAnalysisResource::collection($analyses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SectionWeightAnalysis\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionWeightAnalysis  $sectionWeightAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(SectionWeightAnalysis $sectionWeightAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SectionWeightAnalysis\UpdateRequest  $request
     * @param  \App\Models\SectionWeightAnalysis  $sectionWeightAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, SectionWeightAnalysis $sectionWeightAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionWeightAnalysis  $sectionWeightAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionWeightAnalysis $sectionWeightAnalysis)
    {
        //
    }
}
