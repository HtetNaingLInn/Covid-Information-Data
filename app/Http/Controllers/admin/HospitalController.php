<?php

namespace App\Http\Controllers\admin;

use App\Division;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HospitalRequest;

class HospitalController extends Controller
{
    
    public function division(){

        $divs=Division::paginate('7');
        return view('admin.hospital.division',compact('divs'));
    }

    public function index($id)
    {
        $div=Division::findOrfail($id);
        if(request('search')){
           
            
            $hospitals=Hospital::where('name','like','%'. request('search').'%')->paginate('6');
        }else{
            
            $hospitals=Hospital::findorfail($id)->paginate('6');
        }

        $div=Division::findOrfail($id);
         return view('admin.hospital.index',compact('div','hospitals'));

        
    }

   
    public function create($id)
    {
        $div=Division::findOrfail($id);
        return view('admin.hospital.create',compact('div'));
    }

    
    public function store(HospitalRequest $request)
    {
        Hospital::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'division_id'=>$request->division_id
        ]);
        return back()->with('status','Created Successful');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $div=Division::findOrfail($id);
        $hospital=Hospital::findOrfail($id);
        return view('admin.hospital.edit',compact('div','hospital'));
    }

  
    public function update(Request $request, $id)
    {
        Hospital::findOrfail($id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'division_id'=>$request->division_id
        ]);
        return back()->with('status','Edited Successful');
    }

    
    public function destroy($id)
    {
        Hospital::destroy($id);
        return back()->with('status','Deleted Successful');
    }
}
