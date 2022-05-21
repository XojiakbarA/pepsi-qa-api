<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhysicalChemicalAnalysisRequest;
use App\Http\Requests\UpdatePhysicalChemicalAnalysisRequest;
use App\Http\Resources\PhysicalChemicalAnalysisResource;
use App\Models\PhysicalChemicalAnalysis;
use App\Models\PhysicalChemicalValue;

class PhysicalChemicalAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analyses = PhysicalChemicalAnalysis::latest()->paginate(5);

        return PhysicalChemicalAnalysisResource::collection($analyses);
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
     * @param  \App\Http\Requests\StorePhysicalChemicalAnalysisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhysicalChemicalAnalysisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhysicalChemicalAnalysis  $physicalChemicalAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(PhysicalChemicalAnalysis $physicalChemicalAnalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhysicalChemicalAnalysis  $physicalChemicalAnalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(PhysicalChemicalAnalysis $physicalChemicalAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhysicalChemicalAnalysisRequest  $request
     * @param  \App\Models\PhysicalChemicalAnalysis  $physicalChemicalAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhysicalChemicalAnalysisRequest $request, PhysicalChemicalAnalysis $physicalChemicalAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhysicalChemicalAnalysis  $physicalChemicalAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhysicalChemicalAnalysis $physicalChemicalAnalysis)
    {
        //
    }
}
