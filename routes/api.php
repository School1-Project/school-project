<?php

use Illuminate\Http\Request;

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
Route::get('/student/list', 'Admin\Student\StudentController@list')->name('menu-list');

Route::resource('/grades','Admin\Grade\GradeController');
Route::resource('/periods','Admin\Period\PeriodController');
Route::resource('/class/routines','Admin\Routine\ClassRoutineController');

