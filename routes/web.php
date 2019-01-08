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

// 認證路由...
Route::auth();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home.home');
});
Route::get('/staffhome', function () {
    return view('home.staffhome');
});

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::get('/searchreservation', 'TaskController@index');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('index', ['as' => 'task.index',   'uses' => 'TaskController@index']);
Route::get('store', ['as' => 'store.index',   'uses' => 'StoreController@index']);
Route::get('store1',  ['as' => 'store.show',    'uses' => 'StoreController@show']);
Route::get('meal', ['as' => 'meal.index',   'uses' => 'MealController@index']);
Route::get('meal1',  ['as' => 'meal.show',    'uses' => 'MealController@show']);
Route::get('new',  ['as' => 'post.show',    'uses' => 'PostController@show']);
Route::get('index22',  ['as' => 'meal.index22',    'uses' => 'MealController@index22']);
Route::get('sukiyaki',  ['as' => 'meal.sukiyaki',    'uses' => 'MealController@sukiyaki']);
Route::get('single',  ['as' => 'meal.single',    'uses' => 'MealController@single']);
Route::get('reservation',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
Route::get('reservationok',  ['as' => 'reservation.show',    'uses' => 'ReservationController@show']);
Route::get('searchreservation',  ['as' => 'searchreservation.show',    'uses' => 'SearchReservationController@show']);
Route::get('welcome',  ['as' => 'welcome.index',    'uses' => 'HomeController@index']);
Route::get('member',  ['as' => 'member.show',    'uses' => 'MemberController@show']);
Route::get('members/{id}',  ['as' => 'member.index',    'uses' => 'MemberController@index']);
Route::get('editmember/{id}',  ['as' => 'editmember.edit',    'uses' => 'MemberController@edit']);
Route::patch('/member/update/{id}', 'MemberController@update');
Route::get('/staff', 'StaffController@index');
Route::get('/allreservation', 'AllReservationController@index');
Route::delete('/allreservation/{id}', 'AllReservationController@destroy');
Route::get('wait',  ['as' => 'wait.index',    'uses' => 'WaitController@index']);
Route::post('/wenxins/{id}', 'WaitController@store');
Route::get('/insertwait/{id}', 'WaitController@insert');
Route::get('insertwait',  ['as' => 'wait.insert',    'uses' => 'WaitController@insert']);
Route::get('finishwait',  ['as' => 'wait.finish',    'uses' => 'WaitController@finish']);
Route::get('/success', 'WaitController@finish');
Route::patch('/task/ok/{id}', 'TaskController@ok');
Route::get('/allwait', 'AllwaitController@index');