<?php

namespace App\Http\Controllers\admin;

use App\Ngo;
use App\Donate;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DonateRequest;

class DonateController extends Controller
{
   
    public function index()
    {
        if(request('search')){
            $donates=Donate::where('title','like','%'.request('search').'%')->paginate('6');
        }else
        {
            $donates=Donate::paginate('6');
        }
       
        return view('admin.donation.index',compact('donates'));
    }

    public function create()
    {
        $ngos=Ngo::all();
        $hospitals=Hospital::all();
        return view('admin.donation.create',compact('ngos','hospitals'));
    }

    public function store(DonateRequest $request)
    {
    Donate::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'ngo_id'=>$request->ngo_id,
            'hospital_id'=>$request->hospital_id
    ]);
    return redirect('admin/donate')->with('status','Dontaed Successful');
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
}
