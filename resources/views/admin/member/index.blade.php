@extends('admin.layouts.master')

@section('title','Member')
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
   <div class="row">
        <div class="col-md-8 mb-3">
        <a href="{{url('admin/member/create')}}" target="_blink" ><button type="submit" class="btn btn-primary">
            <div class="fas fa-plus-circle"></div> &nbsp;  Add Member
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
            <h2 class="card-title text-primary">Member List</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Role</th>
                <th>Health Center</th>
                <th  colspan="3">Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($members as $member)
               <tr>
               
                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
               <td>{{$member->address}}</td>
               <td>{{$member->role}}</td>
               <td>{{$member->health_center->name}}</td>
               <td><a href="{{action('admin\MemberController@show',$member->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{action('admin\MemberController@edit',$member->id)}}" class="btn-sm btn-outline-success"><i class="fas fa-edit"></i></a></td>
                <td><a href="{{action('admin\MemberController@destroy',$member->id)}}" class="btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a></td>  
                  
                </tr>
               @empty 
               <div class="col-md-12">
                   <h3>No member you search</h3>
               </div>
               @endforelse
              
             
            </tbody>

            <div class="col-md-12">
                {{$members->links()}}
            </div>
          </table>
        </div>
    
</div>  
</div>


@endsection

