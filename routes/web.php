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
// user
Route::get('/profile', function () {    return view('user.dashboard');	})->middleware('auth');

Route::get('/addproject', function () {    return view('user.addproject');	})->middleware('auth');

Route::resource('projects', 'ProjectsController');
Route::post('projects/{id}', 'ProjectsController@update');
Route::get('myprojects/{id}', 'ProjectsController@userProject')->middleware('auth');
//Route::post('project_edit', 'ProjectsController@edit');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');
Route::post('is_active_user/{id}', 'UserManagementController@is_active');

Route::post('admin-management/search', 'AdminManagementController@search')->name('admin-management.search');
Route::resource('admin-management', 'AdminManagementController');

Route::post('projects-management/search', 'ProjectsManagementController@search')->name('Projects-management.search');
Route::resource('projects-management', 'ProjectsManagementController');
Route::post('is_active/{id}', 'ProjectsManagementController@is_active');

//Route::get('single', function () {	return view('single');});
Route::get('single/{id}', 'IndexController@show');


Route::get('news', function () {	return view('news');	});

Route::get('explore', function () {	return view('explore');	});

Route::get('/', 'IndexController@newest');

Route::get('/login2', function () {	return view('login2');	});

Route::get('/about', function () {	return view('about');	});

Route::get('/contact', function () {	return view('contact');	});

Auth::routes();

Route::group(['middleware' => ['auth', 'Admin']], function() {
	Route::get('/dashboard', 'DashboardController@index');
});

//admin
//Route::get('dashboard', function () {    return view('admin.dashboard');})->middleware('auth');

Route::post('/addproject', 'ProjectsController@store')->middleware('auth');

//Route::post('/projects', 'ProjectsController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/check_out/{id}', 'HomeController@check_out');
Route::post('/check_out/{id}', 'HomeController@update');

Route::get('/stats', 'HomeController@get_stats'); 
