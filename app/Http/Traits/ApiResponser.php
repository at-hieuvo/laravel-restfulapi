<?php

namespace App\Traits;

use Illuminate\Support\Collecttion;
use Illuminate\Database\Eloquent\Model;

trait ApiResopnser
{
    private function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json(['message' => $message, 'code' => '$code'], $code);
    }

    protected function showAll(Collecttion $collection, $code = 200)
    {
        return $this->successResponse(['data' => $collection], $code);
    }

    protected function showOne(Model $model, $code = 200)
    {
        return $this->successResponse(['data' => $model], $code);
    }
}
