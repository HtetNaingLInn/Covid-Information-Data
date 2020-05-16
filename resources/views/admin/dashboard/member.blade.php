@extends('admin.layouts.master')

@section('title','Health')

@section('content')

<div class="container-fluid">

   
    <div class="col-md-8 mb-3">
            
        <div class="col-md-6">
           <a href="{{url('admin/dashboard')}}" target="_blink" ><button type="submit" class="btn btn-primary">
               <div class="fas fa-arrow-circle-left"></div> &nbsp;  back
               </button></a>
        </div>
       
</div>


    <div class="card col-md-12">
        <div class="card-header">
        <h2 class="card-title text-info text-bold">{{$health->name}} Health Center</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Role</th>
                <th>Starting Time</th>
                <th  colspan="2">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @foreach ($health->member as $health->members)
               <tr>
               
                <td>{{$health->members->id}}</td>
                <td>{{$health->members->name}}</td>
               <td>{{$health->members->role}}</td>
               <td>{{$health->members->created_at->diffForhumans()}}</td>
                <td><a href="{{action('admin\MemberController@show',$health->members->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{action('admin\MemberController@destroy',$health->members->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               
               @endforeach
              
             
            </tbody>

           
          </table>
        </div>
    
</div>  
</div>



@endsection




{{-- {{$health->name}}

@foreach ($health->member  as $health->members)
    {{ $health->members->name}}
@endforeach --}}