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

Route::get('/', function () {
    return view('admin.admin_login');
});

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/setting', 'AdminController@setting');
    Route::get('/admin/check-pswd','AdminController@checkPassword');
    Route::match(['get','post'],'/admin/update-pswd','AdminController@updatePassword');
    Route::get('/admin/scsj','ScsjController@showStudent');
    Route::get('/admin/list-of-subject','SubjectController@showSubjectList');
    Route::get('/admin/show-matrix','SubjectController@showMatrix');
    Route::get('/admin/final-year-list','SubjectController@showFinalYear');
    Route::get('/admin/final-year-subject-list','SubjectController@showSubjectListFinalYear');
    Route::get('/admin/elective-course','SubjectController@electiveGroup');

});

Route::get('/logout', 'AdminController@logout');

Route::get('/home', 'HomeController@index');

