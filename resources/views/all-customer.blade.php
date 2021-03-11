@extends('layout')

@section('content')

<div class="container-fluid">
    
   
    <div class="alert alert-info " role="alert">
        <h1 class="text-center">Employee Information List</h1>
        
    </div>
        
    <div class="bg-white py-1">
        <a class="btn btn-sm btn-primary float-right" href="{{ URL::to('create')}}">Add New</a>
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>SL Number</th>
                    <th>Employee Name</th>
                    <th>Employee Address</th>
                    <th>Email Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp

                @foreach($employee as $row)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->email}}</td>
                    <td>
                        <a href="{{ URL::to('employees',$row->id)}}" type="button" class="btn btn-primary">View</a>
                        <a href="{{ URL::to('edit-employees',$row->id)}}" type="button" class="btn btn-success">Edit</a>
                        <a href="{{ URL::to('delete-employees',$row->id)}}" type="button" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>

@endsection
