@extends('admin.layouts.master')

@section('title',$ngo->name)
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
    <div class="col-md-12 mb-3">
        <a href="{{url('admin/ngo')}}" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-arrow-circle-left"></div> &nbsp; Back
            </button></a>
        </div>
        <hr>
   <div class="row">
        <div class="col-md-8 mb-3">


        <a href="{{action('admin\EmployeeController@create',$ngo->id )}}" target="_blink" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Add Employee
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
                <h2 class="card-title text-primary text-bold">{{$ngo->name}} Employee List</h2><br>
            <i>NGO Registion no &nbsp;&nbsp; {{$ngo->register}}</i>
            </div>
            <div class="col-md-4">
            <a href="{{action('admin\NgoController@donateshow',$ngo->id)}}" ><button type="submit" class="btn btn-info float-right">
                    <i class="fas fa-donate"></i> &nbsp; Donation List
            </button></a>
            </div>
        </div>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Position</th>
                <th  colspan="3">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($employees as $employee)
               <tr>
               
                <td>{{$employee->id}}</td>
               <td class="w-25 h-20"><img src="{{asset('/employee/'.$employee->image)}}" class="img-thumbnail w-50 h-20" alt="image"></td>
                <td>{{$employee->name}}</td>
               <td>{{$employee->role}}</td>
               <td><a href="{{action('admin\EmployeeController@show',$employee->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{action('admin\EmployeeController@edit',$employee->id)}}" class="btn-sm btn-outline-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\EmployeeController@destroy',$employee->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
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
            {{$employees->links()}}
        </div>
    
</div>  
</div>


@endsection

