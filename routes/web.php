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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/task','DashboardController@getTasks')->name('getTasks');
Route::get('/task/create','DashboardController@getTaskCreate')->name('getTaskCreate');
Route::post('/task/create','DashboardController@postTaskCreate')->name('postTaskCreate');

Route::get('/deliverable','DashboardController@getDeliverables')->name('getDeliverables');
Route::get('/deliverable/create','DashboardController@getDeliverableCreate')->name('getDeliverableCreate');
Route::post('/deliverable/create','DashboardController@postDeliverableCreate')->name('postDeliverableCreate');

Route::get('/reference-document','DashboardController@getReferenceDocumenets')->name('getReferenceDocumenets');
Route::get('/reference-document/create','DashboardController@getReferenceDocumenetCreate')->name('getReferenceDocumenetCreate');
Route::post('/reference-document/create','DashboardController@postReferenceDocumenetCreate')->name('postReferenceDocumenetCreate');

Route::get('/requirement','DashboardController@getRequirements')->name('getRequirements');
Route::get('/requirement/create','DashboardController@getRequirementCreate')->name('getRequirementCreate');
Route::post('/requirement/create','DashboardController@postRequirementCreate')->name('postRequirementCreate');


Route::get('/change','DashboardController@getChanges')->name('getChanges');
Route::get('/change/create','DashboardController@getChangeCreate')->name('getChangeCreate');
Route::post('/change/create','DashboardController@postChangeCreate')->name('postChangeCreate');


Route::get('/risk','DashboardController@getRisk')->name('getRisk');
Route::get('/risk/create','DashboardController@getRiskCreate')->name('getRiskCreate');
Route::post('/risk/create','DashboardController@postRiskCreate')->name('postRiskCreate');

Auth::routes();