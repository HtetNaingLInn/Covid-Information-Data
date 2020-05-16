<?php

namespace App\Http\Controllers\admin;

use App\City;
use App\Member;
use App\Division;
use App\Health_Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index(){

        if(request('search')){
                $divs=Division::where('name','like','%'.request('search').'%')->orderby('id','desc')->paginate('6');
        }else{
            $divs=Division::orderby('id','desc')->paginate('6');
        }
        $cities=City::all();
        $members=Member::all();
        return view('admin.dashboard.index',compact('divs','cities','members'));
    }
 
    public function show ($id){
        $div=Division::findOrFail($id);
       
        return view('admin.dashboard.township',compact('div'));
    }
    public function health($id){
        $city=City::findOrfail($id);
        return view('admin.dashboard.health',compact('city'));
    }

    public function member($id){
        $health=Health_Center::findOrfail($id);
        return view('admin.dashboard.member',compact('health'));
    }
}
