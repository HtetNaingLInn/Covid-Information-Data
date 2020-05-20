<?php

namespace App\Http\Controllers\admin;

use App\Ngo;
use App\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create($id)
    {
        $ngo=Ngo::findOrfail($id);
        return view('admin.employee.create',compact('ngo'));
    }

    
    public function store(EmployeeRequest $request)
    {
        $image=$request->file('image');
        $imageName=time() .'_' . $image->getClientOriginalName();
        $image->move(public_path().'/employee/',$imageName);

        Employee::create([
            'name'=>$request->name,
            'role'=>$request->role,
            'image'=>$imageName,
            'ngo_id'=>$request->ngo_id,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'nrc'=>$request->nrc,
            'age'=>$request->age,
            'nationality'=>$request->nationality,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience

        ]);
        return redirect()->back()->with('status','Created Successful');
    }

    public function show($id)
    {
        $employee=Employee::findOrfail($id);
        $ngo=Ngo::findOrfail($id);
        return view('admin.employee.show',compact('employee','ngo'));
    }

    
    public function edit($id)
    {
        $employee=Employee::findOrfail($id);
        $ngo=Ngo::findOrfail($id);
        return view('admin.employee.edit',compact('employee','ngo'));
    }

    
    public function update(EmployeeRequest $request, $id)
    {
        $image=$request->file('image');
        $imageName=time() .'_' . $image->getClientOriginalName();
        $image->move(public_path().'/employee/',$imageName);

        Employee::findOrfail($id)->update([
            'name'=>$request->name,
            'role'=>$request->role,
            'image'=>$imageName,
            'ngo_id'=>$request->ngo_id,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'nrc'=>$request->nrc,
            'age'=>$request->age,
            'nationality'=>$request->nationality,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience

        ]);
        return redirect()->back()->with('status','Edited Successful');
    }

    
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect()->back()->with('status','Deleted Successful');
    }
}
