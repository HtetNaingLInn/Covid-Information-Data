@extends('admin.layouts.master')

@section('title','Add Township')
@section('content')
    
<div class="container">
<div class="col-md-8 offset-2">
  @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
  @endif
</div>
<div class="col-md-8 offset-2">
  <a href="{{url('admin/city')}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
    <div class="card col-md-8 offset-2">
      
        <div class="card-header">
            <h4 class="text-info">Add Township</h4>
        </div>
        <div class="card-body">
              <form method="post">
                  @csrf
                  @include('message.errors')
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="division">Select Division</label>
                    <select multiple class="form-control" name="division_id">
                      @foreach ($divs as $div)
                    <option value="{{$div->id}}">{{$div->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-info float-right">Add</button>
              </form>
        </div>
    </div>
</div>
@endsection