<?php

namespace App\Http\Controllers\admin;

use App\City;
use App\Health_Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HealthRequest;

class HealthcenterController extends Controller
{
    
    public function index()
    {
       $healthes= Health_Center::paginate('6');
        return view('admin.health_center.index',compact('healthes'));
    }

    
    public function create()
    {
        $cities=City::all();
        return view('admin.health_center.create',compact('cities'));
    }

    
    public function store(HealthRequest $request)
    {
        Health_Center::create([
            'name'=>$request->name,
            'city_id'=>$request->city_id
        ]);
        return redirect('admin/healthcenter/create')->with('status','created Successfully');
    }

    
    
    
    public function edit($id)
    {
        $cities=City::all();
        $health=Health_Center::FindOrFail($id);
        return view('admin.health_center.edit',compact('cities','health'));
    }

    
    public function update(HealthRequest $request, $id)
    {
        Health_Center::FindOrFail($id)->update([
            'name'=>$request->name,
            'city_id'=>$request->city_id
        ]);
        return redirect('admin/healthcenter')->with('status','Edited Successfully');
    }

   
    public function destroy($id)
    {
        Health_Center::destroy($id);
        return redirect('admin/healthcenter')->with('status','Deleted Successfully');

    }
}
