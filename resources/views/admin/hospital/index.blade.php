@extends('admin.layouts.master')

@section('title',$div->name)
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
    <div class="col-md-12 mb-3">
        <a href="{{url('admin/hospital/division')}}" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-arrow-circle-left"></div> &nbsp; Back
            </button></a>
        </div>
        <hr>
   <div class="row">
        <div class="col-md-8 mb-3">

            
        <a href="{{action('admin\HospitalController@create',$div->id )}}"  ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Add Hospital
            </button></a>



        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search By Name">
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


    <div class="card col-md-12">
        <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h2 class="card-title text-primary text-bold">{{$div->name}} Hospital List</h2>
            </div>
           
        </div>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Division</th>
                <th>Address</th>
                <th  colspan="3">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($hospitals as $hospital)
               <tr>
               
                <td>{{$hospital->id}}</td>
                <td>{{$hospital->name}}</td>
               <td>{{$hospital->division->name}}</td>
               <td>{{$hospital->address}}</td>
               <td><a href="{{action('admin\HospitalController@show',$hospital->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{action('admin\HospitalController@edit',$hospital->id)}}" class="btn-sm btn-outline-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\HospitalController@destroy',$hospital->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               @empty 
               <div class="col-md-12">
                   <h3>No Employee you search</h3>
               </div>
               @endforelse
             
             
            </tbody>
            

            
          </table>
        </div>
        <div class="col-md-12 pagination justify-content-center">
            {{$hospitals->links()}}
        </div>
    
</div>  
</div>


@endsection
 

 