<?php

namespace App\Http\Controllers;

use App\Filters\SecureSealTestFilter;
use App\Http\Requests\SecureSealTest\FilterRequest;
use App\Http\Requests\SecureSealTest\StoreRequest;
use App\Http\Requests\SecureSealTest\UpdateRequest;
use App\Http\Resources\SecureSealTestResource;
use App\Models\SecureSealTest;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SecureSealTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FilterRequest $request, SecureSealTestFilter $filter) : ResourceCollection
    {
        $analyses = SecureSealTest::filter($filter)->latest()->paginate($request->per_page ?? 6);

        return SecureSealTestResource::collection($analyses);
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
     * @param  \App\Http\Requests\SecureSealTest\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecureSealTest  $secureSealTest
     * @return \Illuminate\Http\Response
     */
    public function show(SecureSealTest $secureSealTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecureSealTest  $secureSealTest
     * @return \Illuminate\Http\Response
     */
    public function edit(SecureSealTest $secureSealTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SecureSealTest\UpdateRequest  $request
     * @param  \App\Models\SecureSealTest  $secureSealTest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, SecureSealTest $secureSealTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecureSealTest  $secureSealTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecureSealTest $secureSealTest)
    {
        //
    }
}
