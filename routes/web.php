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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout');



Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'auth'], function () {
    
    Route::get('division','DivisionController@index');
    Route::get('division/create','DivisionController@create');
    Route::post('division/create','DivisionController@store');
    Route::get('division/edit/{id}','DivisionController@edit');
    Route::post('division/edit/{id}','DivisionController@update');
    Route::get('division/destroy/{id}','DivisionController@destroy');

    Route::get('city','CityController@index');
    Route::get('city/create','CityController@create');
    Route::post('city/create','CityController@store');
    Route::get('city/edit/{id}','CityController@edit');
    Route::post('city/edit/{id}','CityController@update');
    Route::get('city/destroy/{id}','CityController@destroy');

    Route::get('healthcenter','HealthcenterController@index');
    Route::get('healthcenter/create','HealthcenterController@create');
    Route::post('healthcenter/create','HealthcenterController@store');
    Route::get('healthcenter/edit/{id}','HealthcenterController@edit');
    Route::post('healthcenter/edit/{id}','HealthcenterController@update');
    Route::get('healthcenter/destroy/{id}','HealthcenterController@destroy');

    Route::get('member','MemberController@index');
    Route::get('member/create','MemberController@create');
    Route::post('member/create','MemberController@store');
    Route::get('member/show/{id}','MemberController@show');
    Route::get('member/edit/{id}','MemberController@edit');
    Route::post('member/edit/{id}','MemberController@update');
    Route::get('member/destroy/{id}','MemberController@destroy');


    Route::get('dashboard','Dashcontroller@index');
    Route::get('dashboard/township/{id}','DashController@show');
    Route::get('dashboard/health/{id}','DashController@health');
    Route::get('dashboard/member/{id}','DashController@member');


});