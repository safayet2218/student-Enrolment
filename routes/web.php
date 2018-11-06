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
Route::get('/logout','AdminController@logout');
Route::get('/student_logout','AdminController@student_logout');

Route::get('/', function () {
    return view('student_login');
});


Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login.......
Route::post('/adminlogin','AdminController@login_dashboard');
Route::post('/studentlogin','AdminController@student_login_dashboard');

Route::get('/student_dashboard','AdminController@student_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');


Route::get('/viewprofile','AdminController@viewprofile');


Route::get('/setting','AdminController@setting');
Route::get('/student_setting','AdminController@student_setting');


Route::get('/student_profile','AddstudentsController@studentprofile');
//add students
Route::get('/addstudent','AddstudentsController@addstudent');
// save student
Route::post('/save_student','AddstudentsController@savestudent');
//delte student
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');
Route::get('/student_view/{student_id}','AllstudentsController@studentview');
Route::get('/student_edite/{student_id}','AllstudentsController@studentedite');
Route::post('/update_student/{student_id}','AllstudentsController@studentupdate');
//all student
Route::get('allstudent','AllstudentsController@allstudent');
//tution fee
Route::get('tutionfee','TutionController@tution');

Route::get('cse','CseController@cse');

Route::get('ece','EceController@ece');

Route::get('bba','BbaController@bba');

Route::get('mba','MbaController@mba');

Route::get('eee','EeeController@eee');


Route::get('allteacher','TeacherController@allteacher');
Route::get('addteacher','TeacherController@addteacher');
Route::post('save_teacher','TeacherController@saveteacher');

