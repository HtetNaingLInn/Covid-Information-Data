@extends('admin.layouts.master')

@section('title', $hospital->name)
@section('content')
    
<div class="container">
<div class="col-md-8 offset-2">
  @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
  @endif
</div>
<div class="col-md-8 offset-2">
<a href="{{action('admin\HospitalController@index',$div->id)}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Edit hospital</h4>
        </div>
        <div class="card-body">
              <form method="post">
                  @csrf
                  @include('message.errors')
              <input type="hidden" name="division_id" value="{{$div->id}}">
                <div class="form-group">
                  <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$hospital->name}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                <input type="address" class="form-control" name="address" value="{{$hospital->address}}">
                  </div>
                  
                 
                  
                <button type="submit" class="btn btn-info float-right">Edit</button>
              </form>
        </div>
    </div>
</div>
@endsection