@extends('admin.layouts.master')

@section('title',$employee->name)
@section('content')

<div class="container col-md-10 offset-1">
    <div class="col-md-12">
        <a href="{{action('admin\NgoController@show',$ngo->id)}}"><button class="btn btn-primary mb-3"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
        </div>
    <div class="card">
        <div class="card-header">
        <h4 class="text-bold text-info">{{$employee->name}}'s Cv Form</h4>
        </div>
        <div class="card-body">

        <div class="row">
            <div class="col-md-7">
               <div class="w-100 h-50">
                <img src="{{asset('/employee/'.$employee->image)}}" alt="" class="img img-thumbnail w-50 h-100 rounded mx-auto d-block">
               </div>
            </div>
            <div class="col-md-5">
            <p>Name &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;:&nbsp; &nbsp;{{$employee->name}}</p>
            <p>Position  &nbsp; &nbsp;:&nbsp; &nbsp;{{$employee->role}}</p>
            <p>Phone  &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp;{{$employee->phone}}</p>
            <p>Email  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: &nbsp; &nbsp;{{$employee->email}}</p>
            <p>Address  &nbsp; &nbsp;: &nbsp; &nbsp;{{$employee->address}}</p>
            <p>NRC  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;: &nbsp; &nbsp;{{$employee->nrc}}</p>
            <p>Age  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp; &nbsp;{{$employee->age}}</p>
            <p>Nationality  &nbsp; &nbsp;&nbsp;&nbsp; :&nbsp; &nbsp;{{$employee->nationality}}</p>
            <p>Qualification  &nbsp; &nbsp;: &nbsp; &nbsp;{{$employee->qualification}}</p>
            <p>experience  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; &nbsp;{{$employee->experience}}</p>
            
            </div>
            
        </div> 

        </div>
        <div class="card-footer">
        <i> NGO Name  &nbsp; &nbsp; &nbsp; &nbsp;{{ $employee->ngo->name}}</i>
        </div>
    </div>

</div>

@endsection