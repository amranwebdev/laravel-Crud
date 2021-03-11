@extends('layout')

@section('content')

<div class="container-fluid py-5">

    <form class="forms-sample" method="post" action="{{URL::to('/addemployee')}}" >
    @csrf 
        <div class="form-group">
            <label for="exampleInputPassword1">Employee Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword2">Employee Address</label>
            <input type="text" class="form-control" id="exampleInputPassword2" name="address" placeholder="Address">
          </div>

        <div class="form-group">
          <label for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-sm btn-primary" href="{{ URL::to('/')}}">Home</a>
    </form>
</div>

@endsection
