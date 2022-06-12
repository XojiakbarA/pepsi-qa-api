<?php

namespace App\Http\Controllers;

use App\Filters\PhysicalChemicalAnalysisFilter;
use App\Http\Requests\PhysicalChemicalAnalysis\FilterRequest;
use App\Http\Requests\PhysicalChemicalAnalysis\StoreRequest;
use App\Http\Requests\PhysicalChemicalAnalysis\UpdateRequest;
use App\Http\Resources\PhysicalChemicalAnalysisResource;
use App\Models\PhysicalChemicalAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PhysicalChemicalAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, PhysicalChemicalAnalysisFilter $filter) : ResourceCollection
    {
        $analyses = PhysicalChemicalAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 6);

        return PhysicalChemicalAnalysisResource::collection($analyses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PhysicalChemicalAnalysis\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PhysicalChemicalAnalysis\UpdateRequest  $request
     * @param  \App\Models\PhysicalChemicalAnalysis  $physicalChemicalAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, PhysicalChemicalAnalysis $physicalChemicalAnalysis)
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
