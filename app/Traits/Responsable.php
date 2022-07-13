<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Throwable;

trait Responsable
{
    private array $additional = [
        'data' => [],
        'message' => null,
        'errors' => null,
    ];

    public function response(JsonResource|Throwable|bool $result, int $statusCode) : JsonResponse
    {
        if ($result instanceof JsonResource) :

            $this->additional['message'] = JsonResponse::$statusTexts[$statusCode];

            return $result->additional($this->additional)->response()->setStatusCode($statusCode);

        elseif (is_bool($result)) :

            $this->additional['message'] = JsonResponse::$statusTexts[$statusCode];

            return response()->json($this->additional, $statusCode);

        elseif ($result instanceof Throwable) :

            $this->additional['message'] = 'Server Error';
            $this->additional['errors'] = $result->getMessage();

            return response()->json($this->additional, 500);

        endif;
    }
}