@extends('admin.layouts.master')

@section('title','Health_center')
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
   <div class="row">
        <div class="col-md-4 mb-3">
        <a href="{{url('admin/healthcenter/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Add Health Center
            </button></a>
        </div>
    
        
    
    </div>
</div>


    <div class="card col-md-12">
        <div class="card-header">
            <h2 class="card-title text-primary">Health Center List</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Township</th>
                <th  colspan="2">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @foreach ($healthes as $health)
               <tr>
               
                <td>{{$health->id}}</td>
                <td>{{$health->name}}</td>
               <td>{{$health->city->name}}</td>
                <td><a href="{{action('admin\HealthcenterController@edit',$health->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\HealthcenterController@destroy',$health->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               
               @endforeach
              
             
            </tbody>

            <div class="col-md-12">
                {{$healthes->links()}}
            </div>
          </table>
        </div>
    
</div>  
</div>


@endsection

