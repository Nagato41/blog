<?php

use Illuminate\Support\Facades\Route;

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
    return view('foodhome');
});
/*Route::get('addnew', function () {
    return view('add_new');
});
Route::get('addpatient', function () {
    return view('add_patiens');
});
Route::get('history', function () {
    return view('history');
});*/


Route::view('addfood','Add_food');
Route::view('addpatients','add_patiens');
Route::view('history','history');

Route::get('food','UsersController@index');
Route::get('patients','PatientsController@index');

Route::post('add','UsersController@create');
Route::post('addpt','PatientsController@create');


Route::delete('patients/{id}', 'PatientsController@destroy')->name('patients.destroy');
Route::delete('food/{id}', 'UsersController@destroy')->name('food.destroy');


