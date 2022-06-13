<?php

namespace App\Http\Controllers;

use App\Filters\ShiftFilter;
use App\Http\Requests\Shift\FilterRequest;
use App\Http\Requests\Shift\StoreRequest;
use App\Http\Requests\Shift\UpdateRequest;
use App\Models\Shift;
use App\Services\ShiftService;
use Illuminate\Http\Response;

class ShiftController extends Controller
{
    protected ShiftService $service;

    public function __construct(ShiftService $shiftService)
    {
        $this->service = $shiftService;
    }

    public function index(FilterRequest $request, ShiftFilter $filter) : Response
    {
        $shifts = $this->service->getAll($request, $filter);

        return response(compact('shifts'), 200);
    }

    public function store(StoreRequest $request) : Response
    {
        $shifts = $this->service->store($request);

        return response(compact('shifts'), 201);
    }

    public function show(Shift $shifts)
    {
        //
    }

    public function update(UpdateRequest $request, Shift $shifts)
    {
        //
    }

    public function destroy(Shift $shifts)
    {
        //
    }
}
