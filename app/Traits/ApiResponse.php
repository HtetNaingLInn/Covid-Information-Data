<?php

namespace App\Traits;

trait ApiResponse

{
    public function successResponse($data,$code=200){
        return response()->json([
            'data'=>$data,
            'message'=>'success'
        ],$code);
    }

    public function errorResponse($code=404){
        return response()->json([
            'message'=>'the ngo not found'
        ],$code);
    }
}