@extends('layout')

@section('content')


<div class="container-fluid py-5">
    <form class="forms-sample" method="post" action="{{URL::to('update-employees/'.$employee->id)}}" >
    @csrf 
        <div class="form-group">
            <label for="exampleInputPassword1">Employee Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$employee->name}}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword2">Employee Address</label>
            <input type="text" class="form-control" id="exampleInputPassword2" name="address" value="{{$employee->address}}">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" name="email" aria-describedby="emailHelp" value="{{$employee->email}}">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-sm btn-primary" href="{{ URL::to('/')}}">Home</a>
    </form>
</div>

@endsection
