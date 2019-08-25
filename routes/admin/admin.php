<?php 
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Student Routes
	Route::resource('/student','Student\StudentController');

// Class Routes
	Route::resource('/grade','Grade\GradeController');

// Teacher Routes
	Route::resource('/teacher','Teacher\TeacherController');

// Section Routes
	Route::resource('/section','Section\SectionController');

// Subject Routes
	Route::resource('/subject','Subject\SubjectController');

// Class Section Routes
	Route::resource('/class-routine','Routine\ClassRoutineController');