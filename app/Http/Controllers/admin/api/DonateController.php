<?php

namespace App\Http\Controllers\admin\api;

use App\Donate;

use Illuminate\Http\Request;
use App\Http\Resources\DonateResource;
use App\Http\Controllers\ApiController;

class DonateController extends ApiController
{
    
    public function index()
    {
        $donate=Donate::all();
        return $this->successResponse(DonateResource::collection($donate));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        Donate::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'ngo_id'=>$request->ngo_id,
            'hospital_id'=>$request->hospital_id
        ]);
        return $this->createResponse();
    }

 
    public function show($id)
    {
        $donate=Donate::Find($id);
        return $donate?$this->successResponse(New DonateResource($donate)):$this->errorResponse();
        
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {

        
        $donate=Donate::Find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'ngo_id'=>$request->ngo_id,
            'hospital_id'=>$request->hospital_id
        ]);
        return $this->successResponse($donate);
    }

    
    public function destroy($id)
    {
        Donate::destroy($id);
        return response()->json([
            'message'=>'deleted Successful'
        ]);
    }
}
