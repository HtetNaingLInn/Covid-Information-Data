@extends('admin.layouts.master')

@section('title','Health')

@section('content')

<div class="container-fluid">

    
    <div class="container-fluid">
       
             <div class="col-md-8 mb-3">
            
                 <div class="col-md-6">
                    <a href="{{url('admin/dashboard')}}" target="_blink" ><button type="submit" class="btn btn-primary">
                        <div class="fas fa-arrow-circle-left"></div> &nbsp;  back
                        </button></a>
                 </div>
                
        </div>
     </div>
<div class="container-fluid">
 <h3 class="text-info my-3 text-bold">{{$city->name}} Township</h3>
    
        
            
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    
                    <h5>{{$city->health_center->name}} Health Center</h5>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-info text-center">Sicker</h2>
                        <h5 class="text-info text-center">{{count( $city->member->where('role','Sicker')) }}</h5>
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-danger text-center">Positive</h2>
                                  <h5 class="text-danger text-center">{{count( $city->member->where('role','Positive')) }}</h5>
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-success text-center">Voluent</h2>
                                  <h5 class="text-success text-center">{{count( $city->member->where('role','Voluenter')) }}</h5>
                        </div>
                    </div>
                    <hr>
                <ol>
                    @foreach ($city->member as $city->members)
                        
                    
                <li>{{$city->members->name}} <p class="text-bold">{{$city->members->role}}</p></li>
                    @endforeach
                </ol>
                </div>
                <div class="card-footer">
                   <div class="float-right">
                   <a href="{{action('admin\DashController@member',$city->health_center->id)}}" class="btn btn-outline-info btn-sm mr-1"> <div class="fas fa-eye"></div> </a>
                   <a href="{{action('admin\HealthcenterController@destroy',$city->health_center->id)}}" class="btn btn-outline-danger btn-sm  mr-1"> <div class="fas fa-trash"></div> </a>
                   </div>
                </div>
            </div> 
        </div>

       

   

    </div>
</div>

</div>




@endsection








