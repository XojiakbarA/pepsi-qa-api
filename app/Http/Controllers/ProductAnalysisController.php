<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductAnalysisRequest;
use App\Http\Requests\UpdateProductAnalysisRequest;
use App\Models\ProductAnalysis;

class ProductAnalysisController extends Controller
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
     * @param  \App\Http\Requests\StoreProductAnalysisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAnalysisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAnalysis  $productAnalysis
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAnalysis $productAnalysis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAnalysis  $productAnalysis
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAnalysis $productAnalysis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductAnalysisRequest  $request
     * @param  \App\Models\ProductAnalysis  $productAnalysis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductAnalysisRequest $request, ProductAnalysis $productAnalysis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAnalysis  $productAnalysis
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAnalysis $productAnalysis)
    {
        //
    }
}
