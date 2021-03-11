<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index() { 

        $employees = Employee::get();
    	return view('all-customer')->with('employee', json_decode($employees));

    }

    public function view($id) {

        $employee = Employee::find($id);
        return view('single-customer')->with('employee', json_decode($employee));
    }

    public function create(){
        return view('add-customer');
    }

    public function add(Request $request) {
            
        $employee = Employee::create($request->all());
        return Redirect()->back();

    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit-customer')->with('employee', json_decode($employee));

    }

    public function update(Request $request, $id) {


        $employee = Employee::find($id);
        $employee->update($request->all());
        return Redirect()->route('/');
        
    }

    public function delete($id) {

            $employee = Employee::find($id);
            $employee->delete();
            return Redirect()->back();

    }
}
