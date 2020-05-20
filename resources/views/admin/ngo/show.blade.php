@extends('admin.layouts.master')

@section('title','Donation list')
@section('content')
    
<div class="container-fluid">

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="container-fluid">
    
        
   <div class="row">
        <div class="col-md-8 mb-3">


            <a href="{{action('admin\NgoController@show',$ngo->id)}}"><button class="btn btn-primary"> <div class="fas fa-arrow-circle-left"></div> &nbsp;Back</button></a>



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
            <h2 class="card-title text-primary text-bold"> {{$ngo->name}}Donation List</h2>
            </div>
            
        </div>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-responsive-md">
            <thead>
              <tr>
                <th>No.</th>
                <th>Date</th>
                <th>NGO Name</th>
                <th>title</th>
                <th>description</th>
                <th>Price</th>
                <th>Hospital Name</th>
                
                
              </tr>
            </thead>
            <tbody>

                
                    
               @forelse ($donates as $donate)
               <tr>
               <td>{{$donate->id}}</td>
               <td>{{$donate->created_at->toformattedDateString('d-M-Y')}}</td>
               <td>{{$donate->ngo->name}}</td>
               <td>{{$donate->title}}</td>
               <td>{{$donate->description}}</td>
               <td>{{$donate->price}}&nbsp; MMK</td>
               <td>{{$donate->hospital->name}}</td>
               
                  
                </tr>
               @empty 
               <div class="col-md-12">
                   <h3>There is no title you search</h3>
               </div>
               @endforelse
             
             
            </tbody>
            

            
          </table>
        </div>
        <div class="col-md-12 pagination justify-content-center">
            {{-- {{$donates->links()}} --}}
        </div>
    
</div>  
</div>


@endsection

