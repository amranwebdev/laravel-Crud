<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('employees', 'Api\EmployeeController@index');
route::get('employees/{id}', 'Api\EmployeeController@view');
route::post('addemployee', 'Api\EmployeeController@add');
route::put('update-employees/{id}', 'Api\EmployeeController@update');
route::delete('delete-employees/{id}', 'Api\EmployeeController@delete');


