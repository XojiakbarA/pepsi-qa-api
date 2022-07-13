<?php

namespace App\Http\Controllers;

use App\Filters\ShiftFilter;
use App\Http\Requests\Shift\FilterRequest;
use App\Http\Requests\Shift\StoreRequest;
use App\Http\Requests\Shift\UpdateValueRequest;
use App\Models\Shift;
use App\Services\ShiftService;
use App\Traits\Responsable;
use Illuminate\Http\JsonResponse;

class ShiftController extends Controller
{
    use Responsable;

    protected ShiftService $service;

    public function __construct(ShiftService $shiftService)
    {
        $this->service = $shiftService;
    }

    public function index(FilterRequest $request, ShiftFilter $filter) : JsonResponse
    {
        $res = $this->service->getAll($request, $filter);

        return $this->response($res, JsonResponse::HTTP_OK);
    }

    public function store(StoreRequest $request) : JsonResponse
    {
        $res = $this->service->store($request);

        return $this->response($res, JsonResponse::HTTP_CREATED);
    }

    public function show(Shift $shift)
    {
        //
    }

    public function update(UpdateValueRequest $request, Shift $shift)
    {
        //
    }

    public function destroy(Shift $shift) : JsonResponse
    {
        $res = $this->service->destroy($shift);

        return $this->response($res, JsonResponse::HTTP_NO_CONTENT);
    }

    public function updateValues(UpdateValueRequest $request)
    {
        $res = $this->service->updateValues($request);

        return $this->response($res, JsonResponse::HTTP_OK);
    }
}
