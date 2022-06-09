<?php

use Illuminate\Support\Facades\Route;
use App\Teacher;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('about','hellocontroller@manush')->name('about');
Route::get('contact','hellocontroller@manush')->name('contact');

Route::get('students','StudentController@student')->name('student');
Route::post('store/student','StudentController@store')->name('store.student');
Route::get('all/students','StudentController@index')->name('all.student');
Route::get('view/student/{id}','StudentController@show');
Route::get('delete/student/{id}','StudentController@destroy');
Route::get('edit/student/{id}','StudentController@edit');
Route::post('update/student/{id}','StudentController@update');

//softdelete

Route::get('/softdeletes', function(){
Teacher::find(2)->delete();
});
Route::get('/findteacher', function(){
    $teacher=Teacher::withTrashed()->get();
    dd($teacher);
    });
    Route::get('/restore', function(){
        Teacher::onlyTrashed()->find(2)->restore();
           });

Route::get('/forcedelete', function(){
     Teacher::onlyTrashed()->find(2)->forcedelete();
        });