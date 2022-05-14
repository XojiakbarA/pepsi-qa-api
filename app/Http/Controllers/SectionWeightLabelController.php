<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionWeightLabelRequest;
use App\Http\Requests\UpdateSectionWeightLabelRequest;
use App\Models\SectionWeightLabel;

class SectionWeightLabelController extends Controller
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
     * @param  \App\Http\Requests\StoreSectionWeightLabelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionWeightLabelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionWeightLabel  $sectionWeightLabel
     * @return \Illuminate\Http\Response
     */
    public function show(SectionWeightLabel $sectionWeightLabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionWeightLabel  $sectionWeightLabel
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionWeightLabel $sectionWeightLabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSectionWeightLabelRequest  $request
     * @param  \App\Models\SectionWeightLabel  $sectionWeightLabel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectionWeightLabelRequest $request, SectionWeightLabel $sectionWeightLabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionWeightLabel  $sectionWeightLabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionWeightLabel $sectionWeightLabel)
    {
        //
    }
}
