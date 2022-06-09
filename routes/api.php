<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//student
Route::post('/student/create','StudentController@store');
Route::post('/student/create-by-department/{departmentId}','StudentController@storeStudentToDepartment');
Route::post('/student/create-by-faculty/{facultyId}','StudentController@storeStudentFromFaculty');
Route::get('/student/show/{id}','StudentController@show');
Route::get('/student-all','StudentController@index');
Route::delete('/student/delete/{id}','StudentController@destroy');
Route::put('/student/update/{id}','StudentController@update');
Route::patch('/student/trash/{id}','StudentController@trash');
Route::patch('/student/restore/{id}','StudentController@restore');
Route::get('/student-all','StudentController@index');


//teacher
Route::patch('/teacher/{id}/trash','TeacherController@trash');
Route::patch('/teacher/{id}/restore','TeacherController@restore');
Route::resource('/teacher', 'TeacherController');

//department
Route::post('/department/create','DepartmentController@store');
Route::patch('/department/trash/{id}','DepartmentController@trash');
Route::patch('/department/restore/{id}','DepartmentController@restore');
Route::get('/department/show/{id}','DepartmentController@show');
Route::get('/department/all','DepartmentController@index');
Route::patch('/department/update/{id}','DepartmentController@update');


//stuff
Route::post('/stuff/create','StuffController@store');
Route::patch('/stuff/trash/{id}','StuffController@trash');
Route::patch('/stuff/restore/{id}','StuffController@restore');
Route::get('/stuff/all','StuffController@index');
Route::get('/stuff/show/{id}','StuffController@show');
Route::patch('/stuff/update/{id}','StuffController@update');


//hall
Route::post('/hall/create','HallController@store');
Route::patch('/hall/trash/{id}','HallController@trash');
Route::patch('/hall/restore/{id}','HallController@restore');
Route::get('/hall/all','HallController@index');
Route::get('/hall/show/{id}','HallController@show');
Route::patch('/hall/update/{id}','HallController@update');

//faculty
Route::post('/faculty/create','FacultyController@store');
Route::patch('/faculty/trash/{id}','FacultyController@trash');
Route::patch('/faculty/restore/{id}','FacultyController@restore');
Route::get('/faculty/all','FacultyController@index');
Route::get('/faculty/show/{id}','FacultyController@show');
Route::patch('/faculty/update/{id}','FacultyController@update');

//student-teacer
Route::get('student_teacher', 'StudentTeacherController@index');
Route::post('/student_teacher/create','StudentTeacherController@store');

//user
Route::patch('/user/{id}/trash','UserController@trash');
Route::patch('/user/{id}/restore','UserController@restore');
Route::resource('/user', 'UserController');

