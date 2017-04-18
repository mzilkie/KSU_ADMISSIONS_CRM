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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Login pages and submission of login

// Route::prefix('user')->group(function(){
    
//     Route::get('/login', 'Auth/LoginController@showLoginForm')->name('user.login');

//     Route::post('/login', 'Auth/LoginController@login')->name('user.login.submit');

Route::get('/', 'HomeController@index')->name('prospect.index');

// Information Sheet routes


  //  Route::get('/prospect/informationsheet', 'InformationSheetController@index')->name('prospect.informationsheet.index');
  //  Route::get('/prospect/informationsheet/create', 'InformationSheetController@create')->name('prospect.informationsheet.create');
  //  Route::get('/prospect/informationsheet/{id}', 'InformationSheetController@show')->name('prospect.informationsheet.show');
  //  Route::post('/prospect', 'InformationSheetController@store')->name('prospect.informationsheet.store');
  //  Route::post('/prospect/informationsheet/{id}/edit', 'InformationSheetController@edit')->name('prospect.informationsheet.edit');


Route::resource('prospect/informationsheet', 'InformationSheetController');

Route::prefix('studentworker')->group(function(){
    
    Route::get('/login', 'Auth\StudentWorkerLoginController@showLoginForm')->name('studentworker.login');

    Route::post('/login', 'Auth\StudentWorkerLoginController@login')->name('studentworker.login.submit');

    Route::get('/', 'StudentWorkerController@index')->name('studentworker.dashboard');

});

Route::prefix('admission')->group(function(){
    
    Route::get('/login', 'Auth\AdmissionLoginController@showLoginForm')->name('admission.login');

    Route::post('/login', 'Auth\AdmissionLoginController@login')->name('admission.login.submit');

    Route::get('/', 'AdmissionController@index')->name('admission.dashboard');

});

Route::prefix('admin')->group(function(){
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

