<?php

namespace App\Http\Controllers\admin;

use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DivisionRequest;

class DivisionController extends Controller
{
    public function index(){
        $divisions = Division::paginate('7');
        return view('admin.division.division',compact('divisions'));
    }

    public function create(){
        return view('admin.division.create');
    }

    public function store(DivisionRequest $request){
        Division::create([
            'name'=>$request->name
        ]);
        return redirect('admin/division/create')->with('status','Created Successfully');
    }
   
    public function edit($id){
        $div=Division::findOrfail($id);
        return view('admin.division.edit',\compact('div'));
    }
    public function update(DivisionRequest $request,$id){
       
        Division::findOrfail($id)->update([
            'name'=>$request->name
        ]);
        return redirect('admin/division')->with('status','Edited Successfully');

    }
    public function destroy($id){
        Division::destroy($id);
        
        return redirect('admin/division')->with('status','Deleted Successfully');
    }
    
}
