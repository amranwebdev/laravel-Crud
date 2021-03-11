@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            {{$employee->name}}
            <a class="btn btn-sm btn-primary float-right" href="{{ URL::to('/')}}">Home</a>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>Employee Name:</strong> {{$employee->name}}</h5>
          <h5 class="card-title"><strong>Employee Address:</strong> {{$employee->address}}</h5>
          <h5 class="card-title"><strong>Employee Email:</strong> {{$employee->email}}</h5>
        </div>
    </div>
</div>

@endsection
