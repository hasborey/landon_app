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

Route::get('/', 'ContentsController@home');
Route::get('/clients', 'ClientController@index');
Route::get('/clients/new', 'ClientController@newClient');
Route::post('/clients/new', 'ClientController@create');
Route::get('/clients/{client_id}', 'ClientController@show');
Route::post('/clients/{client_id}', 'ClientController@modify');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationController@bookRoom');

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '0.1.1';
    return $response_arr;
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

Route::get('/di', 'ClientController@di');

Route::get('facades/db', function() {
    return DB::select('SELECT * FROM table');
});

Route::get('facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

Route::get('facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6IkFzaVRSalVNUVFXR3dmZEY4aTZjeUE9PSIsInZhbHVlIjoiRHl6eVwvZFFFNDhrSDNUR1diMDRLZG4yV0E0U0U1RkVoMWk3dWJkXC93emk4PSIsIm1hYyI6ImFhNWU0Njc0YWQ5OTBiOTc3NjYwY2FlZTU4NjA1Y2U5ODBlNzgyYmY2MjliYmI5NzhiYjE0YTU2ZWU5Yzg4NGUifQ==');
});