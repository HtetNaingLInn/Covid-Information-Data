<?php

namespace App\Http\Controllers\admin;

use App\Member;
use App\Division;
use App\Health_Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;

class MemberController extends Controller
{
   
    public function index()
    {
        if(request('search')){
            $members=Member::where('name','like','%'.request('search').'%')->orderby('id','desc')->paginate('10');
    }else{
        $members=Member::paginate('10');
    }
        
        return view('admin.member.index',compact('members'));
    }

    
    public function create()
    {
        $divs=Division::all();
        $healthes=Health_Center::all();
        return view('admin.member.create',compact('healthes','divs'));
    }

   
    public function store(MemberRequest $request)
    {
        Member::create([
            'name'=>$request->name,
            'nrc'=>$request->nrc,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'description'=>$request->description,
            'role'=>$request->role,
            'division_id'=>$request->division_id,
            'health_center_id'=>$request->health_center_id
        ]);
        return redirect('admin/member/create')->with('status','Created Successfully');
    }

   
    public function show($id)
    {
        $member=Member::findOrfail($id);
       return view('admin.member.show',compact('member'));
    }

  
    public function edit($id)
    {
        $healthes=Health_Center::all();
        $member=Member::findOrFail($id);
        return view('admin.member.edit',compact('healthes','member'));
    }

   
    public function update(MemberRequest $request, $id)
    {
        Member::FindOrfail($id)->update([
            'name'=>$request->name,
            'nrc'=>$request->nrc,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'description'=>$request->description,
            'role'=>$request->role,
            'division_id'=>$request->division_id,
            'health_center_id'=>$request->health_center_id
        ]);
        return redirect('admin/member')->with('status','Created Successfully');
    }

   
    public function destroy($id)
    {
        //
    }
}
