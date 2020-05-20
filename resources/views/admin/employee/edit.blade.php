@extends('admin.layouts.master')

@section('title','Edit Employee')
@section('content')
    
<div class="container">
    <div class="col-md-8 offset-2">
        @if (session('status'))
      <p class="alert alert-success">{{session('status')}}</p>
        @endif
      </div>
<div class="col-md-8 offset-2">
<a href="{{action('admin\NgoController@show',$ngo->id)}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Edit Employee</h4>
        </div>
        <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                  @csrf
                  @include('message.errors')
              <input type="hidden" name="ngo_id" value="{{$ngo->id}}">
                <div class="form-group">
                  <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$employee->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$employee->email}}">
                  </div>
                  <div class="form-group">
                    <label for="nrc">NRC</label>
                    <input type="text" class="form-control" name="nrc" value="{{$employee->nrc}}">
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" name="age" value="{{$employee->age}}">
                  </div>
                  <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" name="nationality" value="{{$employee->nationality}}">
                  </div>
                  <div class="form-group">
                    <label for="role">Position</label>
                    <input type="text" class="form-control" name="role" value="{{$employee->role}}">
                  </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$employee->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$employee->address}}">
                  </div>
                  <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" name="qualification" value="{{$employee->qualification}}">
                  </div>
                  <div class="form-group">
                    <label for="experience">Experience</label>
                    <input type="text" class="form-control" name="experience" value="{{$employee->experience}}">
                  </div>
                 
                    <div class="form-group">
                      <label for="image">Upload Profile</label>
                      <input type="file" class="form-control-file" name="image" value="{{$employee->image}}">
                    </div>
                 
                  
                <button type="submit" class="btn btn-info float-right">Edit</button>
              </form>
        </div>
    </div>
</div>
@endsection