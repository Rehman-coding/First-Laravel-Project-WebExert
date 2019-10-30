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
Route::get('/edit', 'UsersController@profile')->name('edit');

//
Route::get('/dash', 'UsersController@dash')->name('dash');
Route::Post('/update', 'UsersController@updateuser')->name('update');
Route::Post('/', 'UsersController@updateuser')->name('update');

Route::resource('setting','SettingsController');
Route::resource('category','CategoryController');
Route::resource('tag','TagController');
Route::resource('web','WebController');

//Route::get('get-data','PostsController')->name('get-data');

//Route::post('employee-detail','PostsController@getData')->name('employee_detail');
//Route::get('post-detail/{id}','PostsController@getpost')->name('post_detail');
Route::post('post-detail','PostsController@getpost')->name('post_detail');
Route::get('post-blog','HomeController@postforblog')->name('post_blog');
Route::get('post-d/{id}','HomeController@postd')->name('post_d');
Route::get('/main', function () {
    return view('theme/main');
});

Route::group([
    'middleware'=>'auth',
    'prefix'=>'admin',
    ],function (){
    Route::resource('posts','PostsController');
});

//Route::view('create','posts/create');