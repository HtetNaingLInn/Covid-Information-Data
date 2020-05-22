<?php

namespace App\Http\Controllers\admin;

use App\Ngo;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\NgoRequest;
use App\Http\Controllers\Controller;

class NgoController extends Controller
{
  
    public function index()
    {
        if(request('search')){
            $ngos=Ngo::where('name','like','%'.request('search').'%')
            ->orderby('id','desc')->paginate('6');
        }else{
            $ngos=Ngo::paginate('6');
        }
        
        return view('admin.ngo.index',compact('ngos'));
    }

   
    public function create()
    {
        return view('admin.ngo.create');
    }

  
    public function store(NgoRequest $request)
    {

        $image=$request->file('image');
        $imageName=time() .'_' . $image->getClientOriginalName();
        $image->move(public_path().'/ngo/',$imageName);

        Ngo::create([
            'name'=>$request->name,
            'image'=>$imageName,
            'phone'=>$request->phone,
            'supported'=>$request->supported,
            'address'=>$request->address,
            'register'=>$request->register

        ]);
        return redirect('admin/ngo/create')->with('status','Created successful');
    }

    
    public function show($id)
    {
    if(request('search')){
        $ngo=Ngo::findOrfail($id);
        
        $employees=Employee::where('name','like','%'. request('search').'%')->paginate('6');
    }else{
        $ngo=Ngo::findOrfail($id);
        $employees=Employee::findorfail($id)->paginate('6');
    }
        
     return view('admin.employee.employee',compact('ngo','employees'));

        
    }

   
    public function edit($id)
    {
        $ngo=Ngo::FindOrFail($id);
        return view('admin.ngo.edit',compact('ngo'));
    }

   
    public function update(NgoRequest $request, $id)
    {

        $image=$request->file('image');
        $imageName=time() .'_' . $image->getClientOriginalName();
        $image->move(public_path().'/ngo/',$imageName);

        Ngo::FindOrfail($id)->update([
            'name'=>$request->name,
            'image'=>$imageName,
            'phone'=>$request->phone,
            'supported'=>$request->supported,
            'address'=>$request->address,
            'register'=>$request->register

        ]);
        return redirect('admin/ngo')->with('status','Edited successful');
    }

    public function destroy($id)
    {
        Ngo::destroy($id);
        return redirect('admin/ngo')->with('status','Deleted Successful');
    }
 

    public function donateshow($id){

        // if(request('from','to')){
        //     $ngo=Ngo::findOrfail($id);
        // $donates=$ngo->donate::whereBetween($ngo->donate->created_at,[request('from') , request('to')])->get();

        // }else{
        //     $ngo=Ngo::findOrfail($id);
        //     $donates=$ngo->donate;
        // }

        $ngo=Ngo::findOrfail($id);
           $donates=$ngo->donate;

        return view('admin.ngo.show',compact('ngo','donates'));
    }
}
