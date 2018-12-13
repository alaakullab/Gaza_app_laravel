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

Route::get('/','ContentsController@home');
Route::get('/clients','ClientController@index');
Route::get('/clients/new','ClientController@newClient');
Route::post('/clients/new','ClientController@create');
Route::get('/clients/{clients_id}','ClientController@show');
Route::post('/clients/{clients_id}','ClientController@modify');

Route::get('/reservations/{clients_id}','RoomsController@checkAvailableRooms');
Route::post('/reservations/{clients_id}','RoomsController@checkAvailableRooms');

Route::get('/book/room/{clients_id}/{room_id}/date_out','ReservationsController@bookRoom');


Route::get('/di', 'ClientController@di');

Route::get('/Facades/db', function () {

	return DB::select('select * from table');
});

Route::get('/Facades/encrypt', function () {

	return Crypt::encrypt('123456789');
});

Route::get('/Facades/decrypt', function () {

	return Crypt::decrypt('eyJpdiI6InVKOURnQXYrZEwyVGM1VzFkZU44Qnc9PSIsInZhbHVlIjoidzFFUUVOandDU0wwMEFjUjIzOFJQV2ErUlNZa2tlUEg4Q1RGUGpDUHJwRT0iLCJtYWMiOiIwYzkyM2RlMDY0YjI1Yjk2NGFhNmM0Zjc4Nzc4OGI3ZjU1MGM4MGMxZDU1NWU2NDM4ZDBiOGQwZjk5MjMyMzljIn0=');
});