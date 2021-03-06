@extends('admin.layouts.master')

@section('title','Ngo Create')
@section('content')
    
<div class="container">
<div class="col-md-8 offset-2">
  @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
  @endif
</div>
<div class="col-md-8 offset-2">
  <a href="{{url('admin/ngo')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Add NGO</h4>
        </div>
        <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                  @csrf
                  @include('message.errors')
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="supported">Supported By</label>
                    <input type="text" class="form-control" name="supported">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" rows="3" name="address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image">Upload photo</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group">
                    <label for="register">Registation no.</label>
                    <input type="text" class="form-control" name="register">
                  </div>
                <button type="submit" class="btn btn-info float-right">Add</button>
              </form>
        </div>
    </div>
</div>
@endsection