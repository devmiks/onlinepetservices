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
    return view('welcome');
});

Auth::routes();

Route::get('/RegularPage', 'HomeController@index')->name('home');

// Admin Route
Route::get('/ProfessionalPage', 'AdminController@index')->name('admin');
Route::put('/ProfessionalPage/update&profile', 'AdminController@update')->name('update-profile');

// Service Route
Route::post('/ProfessionalPage/create_service/save_new', 'ServiceController@store')->name('createnewservice1');
Route::post('/ProfessionalPage/create_service/save_service', 'ServiceController@addnewservice')->name('addprofileservice1');

Route::get('/ProfessionalPage/{$id}', 'ServiceController@delete')->name('deleteService1');
Route::put('/ProfessionalPage/updateservice', 'ServiceController@update')->name('editservices1');













