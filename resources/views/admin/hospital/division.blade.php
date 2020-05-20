@extends('admin.layouts.master')

@section('title','Hospital')
@section('content')
    
<div class="container-fluid">

 


    <div class="card col-md-12">
        <div class="card-header">
            <h2 class="card-title text-primary text-bold">Myanamr Division List</h2>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>

                
                    
               @foreach ($divs as $div)
               <tr>
               
                <td>{{$div->id}}</td>
                <td>{{$div->name}}</td>
                <td><a href="{{action('admin\HospitalController@index',$div->id)}}" class="btn-sm btn-outline-info"><i class="fas fa-eye"></i></a></td>
                
                  
                </tr>
               
               @endforeach
              
             
            </tbody>

            
          </table>
         
        </div>
        <div class="col-md-12 pagination justify-content-center">
            {{$divs->links()}}
        </div>
    
</div>  
</div>


@endsection

