<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionWeightAnalysisRequest;
use App\Http\Requests\UpdateSectionWeightAnalysisRequest;
use App\Models\SectionWeightAnalysis;

class SectionWeightAnalysisController extends Controller
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
     * @param  \App\Http\Requests\StoreSectionWeightAnalysisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionWeightAnalysisRequest $request)
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionWeightAnalysis  $sectionWeightAnalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionWeightAnalysis $sectionWeightAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSectionWeightAnalysisRequest  $request
     * @param  \App\Models\SectionWeightAnalysis  $sectionWeightAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectionWeightAnalysisRequest $request, SectionWeightAnalysis $sectionWeightAnalysis)
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