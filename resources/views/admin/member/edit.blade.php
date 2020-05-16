@extends('admin.layouts.master')

@section('title','Edit Member')
@section('content')
    
<div class="container">
<div class="col-md-8 offset-2">
  @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
  @endif
</div>
<div class="col-md-8 offset-2">
  <a href="{{url('admin/member')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Edit Member</h4>
        </div>
        <div class="card-body">
              <form method="post">
                  @csrf
                  @include('message.errors')
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" value="{{$member->name}}">
                </div>
                <div class="form-group">
                    <label for="nrc">NRC</label>
                <input type="text" class="form-control" name="nrc" value="{{$member->nrc}}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$member->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$member->address}}">
                  </div>
                  <div class="form-group">
                    <label for="description">Last Route</label>
                  <textarea class="form-control" rows="3" name="description" aria-valuemax="{{$member->description}}"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="role">Select Role</label>
                    <select class="form-control" name="role">
                      <option>Sicker</option>
                      <option>Positive</option>
                      <option>Voluenter</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="healthcenter">Select Health Center</label>
                    <select multiple class="form-control" name="health_center_id">
                      @foreach ($healthes as $health)
                          
                      
                    <option value="{{$health->id}}">{{$health->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-info float-right">edit</button>
              </form>
        </div>
    </div>
</div>
@endsection