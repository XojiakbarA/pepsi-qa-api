<?php

namespace App\Http\Controllers;

use App\Filters\RemovalTorqueAnalysisFilter;
use App\Http\Requests\RemovalTorqueAnalysis\FilterRequest;
use App\Http\Requests\RemovalTorqueAnalysis\StoreRequest;
use App\Http\Requests\RemovalTorqueAnalysis\UpdateRequest;
use App\Http\Resources\RemovalTorqueAnalysisResource;
use App\Models\RemovalTorqueAnalysis;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RemovalTorqueAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, RemovalTorqueAnalysisFilter $filter) : ResourceCollection
    {
        $analyses = RemovalTorqueAnalysis::filter($filter)->latest()->paginate($request->per_page ?? 6);

        return RemovalTorqueAnalysisResource::collection($analyses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RemovalTorqueAnalysis\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RemovalTorqueAnalysis  $removalTorqueAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(RemovalTorqueAnalysis $removalTorqueAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RemovalTorqueAnalysis\UpdateRequest  $request
     * @param  \App\Models\RemovalTorqueAnalysis  $removalTorqueAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, RemovalTorqueAnalysis $removalTorqueAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RemovalTorqueAnalysis  $removalTorqueAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemovalTorqueAnalysis $removalTorqueAnalysis)
    {
        //
    }
}
