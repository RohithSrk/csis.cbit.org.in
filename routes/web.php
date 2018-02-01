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

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/change-password', 'HomeController@showChangePasswordForm');
Route::post('/change-password','HomeController@changePassword')->name('changePassword');

Route::get( '/student/view-lab-marks', 'LabMarksController@show' );

Route::get( '/students/add-lab-marks', 'LabMarksController@index' );
Route::post( '/students/add-lab-marks', 'LabMarksController@create' );
Route::put( '/students/add-lab-marks', 'LabMarksController@store' );

Route::get( '/lab-marks/view', 'LabMarksController@studentIndexLabMarks' );
Route::post( '/lab-marks/view', 'LabMarksController@studentViewLabMarks' );

Route::get( '/students/view-lab-marks', 'LabMarksController@indexLabMarks' );
Route::post( '/students/view-lab-marks', 'LabMarksController@viewLabMarks' );

Route::get( '/students/add-absentee-lab-marks', 'AbsenteeLabMarksController@index' );
Route::post( '/students/add-absentee-lab-marks', 'AbsenteeLabMarksController@create' );
Route::put( '/students/add-absentee-lab-marks', 'AbsenteeLabMarksController@store' );

Route::get('/faculty/assign-courses', 'CoursesController@index' );
Route::post('/faculty/assign-courses', 'CoursesController@create' );
Route::put('/faculty/assign-courses', 'CoursesController@store' );

Route::get( '/lab/manage-mark-types', 'LabMarkTypesController@index' );
Route::post( '/lab/manage-mark-types', 'LabMarkTypesController@create' );
Route::put( '/lab/manage-mark-types', 'LabMarkTypesController@store' );

Route::get( '/feedback/list', 'FeedbackController@index' );
Route::get( '/feedback/view', 'FeedbackController@viewResult' );

Route::get( '/feedback/view-report', 'FeedbackController@selectFeedback' );
Route::post( '/feedback/view-report', 'FeedbackController@viewReport' );

Route::get( '/feedback/create', 'FeedbackController@create' );
Route::post( '/feedback/create', 'FeedbackController@store' );

Route::get( '/feedback/{feedback}/edit', 'FeedbackController@edit' );
Route::post( '/feedback/{feedback}/edit', 'FeedbackController@update' );

Route::get( '/feedback/{feedback}/delete', 'FeedbackController@destroy' );

Route::get( '/feedback-data/{feedback}/add', 'FeedbackDataController@index' );
Route::post( '/feedback-data/{feedback}/add', 'FeedbackDataController@create' );
Route::put( '/feedback-data/{feedback}/add', 'FeedbackDataController@store' );

Route::get( '/feedback-new-data/{feedback}/get', 'FeedbackDataController@selectFeedbackUsers' );
Route::post( '/feedback-new-data/{feedback}/get', 'FeedbackDataController@listFeedbackUsers' );
Route::get( '/feedback-new/{feedback}/{section}/print-users', 'FeedbackDataController@printFeedbackUsers' );

Route::get( '/feedback-data/{feedback}/edit', 'FeedbackDataController@show' );
Route::post( '/feedback-data/{feedback}/edit', 'FeedbackDataController@edit' );
Route::put( '/feedback-data/{feedback}/edit', 'FeedbackDataController@update' );

// Anonymous Feedback.

Route::get('/anonymous-feedback/login', 'Auth\FeedbackUserLoginController@showLoginForm' )
	   ->name('feedback-user.login');
Route::post('/anonymous-feedback/login', 'Auth\FeedbackUserLoginController@login' )
	   ->name('feedback-user.login.submit');
Route::get('/anonymous-feedback', 'FeedbackUserController@index' )
       ->name('feedback-user.dashboard');
Route::post('/anonymous-feedback', 'FeedbackUserController@store' )
       ->name('feedback-user.dashboard');

// Ajax Routes.

Route::get( '/subjects/{subject}/get-sections', 'AjaxController@getSubjectSections' );
Route::get( '/sections/{section}/get-batches', 'AjaxController@getSectionBatches' );
Route::get( '/years/{year}/get-sections', 'AjaxController@getYearSections' );
Route::get( '/subjects/{subject}/batches/{batch}/labweek/{labWeek}/get-date', 'AjaxController@getLabWeekDate' );
Route::get( '/students/{rollnum}/get-batch-id', 'AjaxController@getStudentBatchId' );
Route::get( '/students/{rollnum}/get-batch-id', 'AjaxController@getStudentBatchId' );

Route::bind('rollnum', function($value) {
	return \App\Student::where('rollnum', $value)->first();
});

Route::get( '/semesters/{semester}/get-subjects', 'AjaxController@getSemesterSubjects' );
Route::get( '/semesters/{semester}/get-sections', 'AjaxController@getSemesterSections' );
Route::get( '/sections/{section}/subjects/{subject}/get-faculty', 'AjaxController@getSubjectFaculty' );
Route::get( '/faculty/{employee}/get-subjects', 'AjaxController@getFacultySubjects' );
