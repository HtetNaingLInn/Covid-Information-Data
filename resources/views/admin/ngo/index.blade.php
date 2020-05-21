@extends('admin.layouts.master')

@section('title','NGO')
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
   <div class="row">
        <div class="col-md-8 mb-3">
        <a href="{{url('admin/ngo/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Add NGO
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
            <h2 class="card-title text-primary text-bold">NGO List</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Supported</th>
                <th>Address</th>
                <th  colspan="3">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($ngos as $ngo)
               <tr>
               
                <td>{{$ngo->id}}</td>
                <td class="w-25 h-20"><img src="{{asset('/ngo/'.$ngo->image)}}" class="img-thumbnail w-50 h-20" alt="image"></td>
                <td>{{$ngo->name}}</td>
               <td>{{$ngo->phone}}</td>
               <td>{{$ngo->supported}}</td>
               <td>{{$ngo->address}}</td>
               <td><a href="{{action('admin\NgoController@show',$ngo->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{action('admin\NgoController@edit',$ngo->id)}}" class="btn-sm btn-outline-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\NgoController@destroy',$ngo->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               @empty 
               <div class="col-md-12">
                   <h3>No member you search</h3>
               </div>
               @endforelse
              
             
            </tbody>

            <div class="col-md-12">
                {{$ngos->links()}}
            </div>
          </table>
        </div>
    
</div>  
</div>


@endsection

