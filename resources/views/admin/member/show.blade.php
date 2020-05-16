@extends('admin.layouts.master')

@section('title',$member->name)

@section('content')
<div class="col-md-10 offset-1 my-2">
<a href="{{url('admin/dashboard')}}"><button class="btn btn-primary"> <div class="fas fa-arrow-circle-left"></div> Back</button></a>
</div>
<div class=" container col-md-10 offset-1">

    
    <div class="card">
        <div class="card-header">
           <h3 class="text-bold"> {{$member->name}}</h3>
        </div>
        <div class="card-body">
            <ul>
            <li> NRC       &nbsp;&nbsp;&nbsp;: {{$member->nrc}}</li>
            <li> Phone     &nbsp;&nbsp;&nbsp;: {{$member->phone}}</li>
            <li> Address   &nbsp;&nbsp;&nbsp;: {{$member->address}}</li>
            <li> Last Tour &nbsp;&nbsp;&nbsp;: {{$member->description}}</li>
            <li> Role      &nbsp;&nbsp;&nbsp;: {{$member->role}}</li>
            <li> Starting Date      &nbsp;&nbsp;&nbsp;: {{$member->created_at->diffForHumans()}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection