<?php

namespace App\Http\Controllers;

use App\Filters\BurstTestFilter;
use App\Http\Requests\BurstTest\FilterRequest;
use App\Http\Requests\BurstTest\StoreRequest;
use App\Http\Requests\BurstTest\UpdateRequest;
use App\Http\Resources\BurstTestResource;
use App\Models\BurstTest;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BurstTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, BurstTestFilter $filter) : ResourceCollection
    {
        $analyses = BurstTest::filter($filter)->latest()->paginate($request->per_page ?? 6);

        return BurstTestResource::collection($analyses);
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
     * @param  \App\Http\Requests\BurstTest\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BurstTest  $burstTest
     * @return \Illuminate\Http\Response
     */
    public function show(BurstTest $burstTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BurstTest  $burstTest
     * @return \Illuminate\Http\Response
     */
    public function edit(BurstTest $burstTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BurstTest\UpdateRequest  $request
     * @param  \App\Models\BurstTest  $burstTest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, BurstTest $burstTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BurstTest  $burstTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(BurstTest $burstTest)
    {
        //
    }
}
