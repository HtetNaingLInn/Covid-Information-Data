@extends('admin.layouts.master')

@section('title',$ngo->name)
@section('content')
    
<div class="container">
<div class="col-md-8 offset-2">

</div>
<div class="col-md-8 offset-2">
  <a href="{{url('admin/ngo')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Edit NGO</h4>
        </div>
        <div class="card-body">
              <form method="post">
                  @csrf
                  @include('message.errors')
                <div class="form-group">
                  <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$ngo->name}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$ngo->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="supported">Supported By</label>
                    <input type="text" class="form-control" name="supported" value="{{$ngo->supported}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="3" name="address" value="{{$ngo->address}}"></textarea>
                  </div>
                
                <button type="submit" class="btn btn-info float-right">Edit</button>
              </form>
        </div>
    </div>
</div>
@endsection