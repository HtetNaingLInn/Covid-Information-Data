<?php

namespace App\Http\Controllers\admin;

use App\City;
use App\Division;
use Illuminate\Http\Request;
use App\Http\Requests\CityRequest;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
   
    public function index()
    {
        $cities=City::paginate('6');
        return view('admin.city.city',compact('cities'));
    }

    
    public function create()
    {
        $divs = Division::all();
        return view('admin.city.create',compact('divs'));
    }

    
    public function store(CityRequest $request)
    {
        City::create([
            'name'=>$request->name,
            'division_id'=>$request->division_id
        ]);
        return redirect('admin/city/create')->with('status','Created Successfully');
    }

    
    public function edit($id)
    {
        $city=City::findOrFail($id);
        $divs = Division::all();
        return view('admin.city.edit',compact('city','divs'));
    }

    
    public function update(CityRequest $request, $id)
    {
        City::FindOrFail($id)->update([
            'name'=>$request->name,
            'division_id'=>$request->division_id
        ]);
        return redirect('admin/city')->with('status','Edited Successfully');
    }

   
    public function destroy($id)
    {
        City::destroy($id);

        return \redirect('admin/city')->with('status','Deleted Successfully');
    }
}
