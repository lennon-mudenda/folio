<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($message="", $data=[])
    {
        return response()->json([
            "mesaage" => $message,
            "data" => $data
        ]);
    }

    public function error($message="", $data=[])
    {
        return response()->json([
            "mesaage" => $message,
            "data" => $data
        ], 400);
    }
}
