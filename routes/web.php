<?php

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

Route::get('/', [
    'uses' => 'BaseController@index',
    'as' => 'index'
]);

//first fall
Route::post('/department',[
    'uses' => 'BaseController@next',
    'as' => 'next'
]);

//first fall-> first spring
Route::post('/department-spring',[
    'uses' => 'BaseController@nextFirstSpring',
    'as' => 'first-spring'
]);

//second fall
Route::post('/department-second',[
    'uses' => 'BaseController@secondFall',
    'as' => 'second-fall'
]);

//second fall -> second spring
Route::post('/department-second-spring',[
    'uses' => 'BaseController@secondSpring',
    'as' => 'second-spring'
]);

//third fall
Route::post('/department-third',[
    'uses' => 'BaseController@thirdFall',
    'as' => 'third-fall'
]);

//third fall -> third spring
Route::post('/department-third-spring',[
    'uses' => 'BaseController@thirdSpring',
    'as' => 'third-spring'
]);

//fourth fall
Route::post('/department-fourth',[
    'uses' => 'BaseController@fourthFall',
    'as' => 'fourth-fall'
]);

//fourth fall -> fourth spring
Route::post('/department-fourth-spring',[
    'uses' => 'BaseController@fourthSpring',
    'as' => 'fourth-spring'
]);

//fourth fall -> fourth spring
Route::post('/completed',[
    'uses' => 'BaseController@final',
    'as' => 'final'
]);

// cpanel
Route::get('/cpanel',[
    'uses' => 'CPanelController@index',
    'as' => 'cpanel'
]);

//cpanel curricula
Route::post('/cpanel-curriculum',[
    'uses' => 'CPanelController@curriculum',
    'as' => 'curriculum'
]);

Route::get('/print-curriculum-{id}',[
    'uses' => 'CPanelController@printCurriculum',
    'as' => 'print-curriculum'
]);

//cpanel staff
Route::post('/cpanel-staff',[
    'uses' => 'CPanelController@staff',
    'as' => 'staff'
]);

//cpanel courses
Route::post('/cpanel-courses',[
    'uses' => 'CPanelController@courses',
    'as' => 'courses'
]);

Route::post('/add-course',[
    'uses' => 'CPanelController@addCourse',
    'as' => 'add-course'
]);

Route::get('/delete-course-{id}-{departmentId}',[
    'uses' => 'CPanelController@deleteCourse',
    'as' => 'delete-course'
]);
