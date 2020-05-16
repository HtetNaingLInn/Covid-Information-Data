@extends('admin.layouts.master')

@section('title','Dashboard')
@section('content')

<div class="container-fluid">

    @if (session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
          @endif

          <div class="col-md-10 offset-1">
              <div class="card">
                  <div class="card-header">
                    <h3 class="text-bold text-center">Covid Data Information In Myanmar Country</h3>
                  </div>
                  
              <div class="card-body">
                  <div class="row">
                  <div class="col-md-4">
                      <h4 class="text-center text-info">Quarantine</h4>
                  <p class="text-center text-bold">{{count($members->where('role','Sicker'))}}</p>
                  </div>
                  <div class="col-md-4">
                    <h4 class="text-center text-danger">Positive</h4>
                    <p class="text-center text-bold">{{count($members->where('role','Positive'))}}</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center text-success">Voluenter</h4>
                    <p class="text-center text-bold">{{count($members->where('role','Voluenter'))}}</p>
                </div>
              </div>
            </div>
              </div>
          </div>
    <div class="container-fluid">
        <div class="row">
             
             <div class="col-md-4">
                 <div class="col-md-12">
                     <form>
                         <div class="input-group mb-3">
                             <input type="text" name="search" class="form-control" placeholder="Search By Division Name">
                             <div class="input-group-append">
                                 <button class="btn btn-primary" type="submit" id="button-addon2">
                                     <i class="fas fa-search"></i>
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         
        </div>
     </div>
<div class="container-fluid">
    <div class="row">
        @forelse ($divs as $div)
            
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-bold text-info">{{$div->name}}</h3>
                </div>
                <div class="card-body">
               @foreach ($div->city as $div->cities)
                   <ul>
                   @foreach ( $div->cities->member as $div->cities->members)
                      <li> {{ $div->cities->members->name}}</li>
                   @endforeach
                </ul>
               @endforeach
                    
                    
                </div>
                <div class="card-footer">
                   <div class="float-right">
                   <a href="{{action('admin\DashController@show',$div->id)}}" class="btn btn-outline-info btn-sm mr-1"> <div class="fas fa-eye"></div> </a>
                   <a href="{{action('admin\DivisionController@destroy',$div->id)}}" class="btn btn-outline-danger btn-sm  mr-1"> <div class="fas fa-trash"></div> </a>
                   </div>
                </div>
            </div>
        </div>
        @empty
<div class="card col-md-8 offset-2 mt-5 bg-dark">

    <div class="card-body">
        <h3 class="text-info text-center">There is No Division Here </h3>
    </div>
</div>
        @endforelse

<div class="container-fluid">
    <div class="col-md-12 pagination justify-content-center">
        {{$divs->links()}}
    </div>
   
</div>
    </div>
</div>

</div>
@endsection