<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', 'EmployeeController@index')->name('/');
route::get('/employees/{id}', 'EmployeeController@view');
route::get('/create', 'EmployeeController@create');
route::post('addemployee', 'EmployeeController@add');
Route::get('/edit-employees/{id}', 'EmployeeController@edit');
route::post('update-employees/{id}', 'EmployeeController@update');
route::get('delete-employees/{id}', 'EmployeeController@delete');
