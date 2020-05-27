<?php

namespace App\Http\Controllers\admin\api;

use App\Member;
use Illuminate\Http\Request;

use App\Http\Resources\MemberResource;
use App\Http\Controllers\ApiController;

class MemberController extends ApiController
{
   
    public function index()
    {
         $member=Member::all();
         return $this->successResponse(MemberResource::collection($member));
        // return response()->json([
        //     "data"=>MemberResource::collection($member),
        //     "message"=>'success'
        // ],200);
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
        //
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

    public function sicker(){
        $member=Member::all();
        $pp=$member->where('role','Sicker');
        return $this->successResponse(MemberResource::collection($pp));
    }
}
