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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	// Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
	Route::get('/admin/dashboard','Admin\DashBoardController@index');	
});
Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
	// Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
	Route::get('/user/interface','User\InterfaceController@index');
	
});
Route::get('/admin/user/','Admin\User\UserController@index')->name('admin.user');
Route::post('/admin/user/{id}/edit','admin\user\UserController@edit');
Route::patch('/admin/user/{id}','admin\user\UserController@update');
Route::delete('/admin/user/{id}','admin\user\UserController@destroy');
