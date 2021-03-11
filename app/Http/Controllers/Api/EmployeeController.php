<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index() { 

        $employee = Employee::get();
        return response()->json(Employee::all(), 200);

    }

    public function view($id) {

        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=> 'Data does not found'], 400);
        } else {
            return response()->json($employee::find($id), 200);
        }
        
    }


    public function add(Request $request) {

       $employee = Employee::create($request->all());
       return response($employee, 201);
            

    }

    

    public function update(Request $request, $id) {

        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=> 'Data  not found'], 404);
        } else {
            $employee->update($request->all());
            return response($employee , 200);
        }

      
        
    }

    public function delete($id) {

        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=> 'Data no found'], 404);
        } else {
            $employee->delete();
            return response()->json(null, 204);
        }

    }
    
}
