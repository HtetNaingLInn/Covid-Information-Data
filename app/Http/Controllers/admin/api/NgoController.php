<?php

namespace App\Http\Controllers\admin\api;

use App\Ngo;
use Illuminate\Http\Request;
use App\Http\Resources\NgoResource;

use App\Http\Controllers\ApiController;

class NgoController extends ApiController
{
    
    public function index()
    {
       $ngo=Ngo::all();
      
        // return response()->json([
        //     'data'=>NgoResource::collection($ngo),
        //     'message'=>'good'
        // ],200);
        return $this->successResponse(NgoResource::collection($ngo));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $ngo=Ngo::Find($id);

        if($ngo){
            return $this->successResponse(new NgoResource($ngo));
        }
        else{
            return $this->errorResponse();
        }
        // return response()->json([
        //     'data'=>new NgoResource($ngo),
            
        // ],200);
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

    // public function successResponse($data,$code=200){
    //     return response()->json([
    //         'data'=>$data,
    //         'message'=>'success'
    //     ],$code);

    // }
}
