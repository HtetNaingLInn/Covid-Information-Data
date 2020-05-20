@extends('admin.layouts.master')

@section('title','Donate')
@section('content')
    
<div class="container">

<div class="col-md-8 offset-2">
  <a href="{{url('admin/city')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Donation</h4>
        </div>
        <div class="card-body">
              <form method="post">
                  @csrf
                  @include('message.errors')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description">
                  </div>
                <div class="form-group">
                    <label for="division">Select NGO</label>
                    <select multiple class="form-control" name="ngo_id">
                      @foreach ($ngos as $ngo)
                    <option value="{{$ngo->id}}">{{$ngo->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="division">Select Hospital</label>
                    <select multiple class="form-control" name="hospital_id">
                      @foreach ($hospitals as $hospital)
                    <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-info float-right">Add</button>
              </form>
        </div>
    </div>
</div>
@endsection