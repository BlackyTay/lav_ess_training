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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
    $hash = Hash::make('blacky');
    var_dump($hash);
    var_dump(Hash::check('blacky', $hash));
    var_dump(Hash::needsRehash($hash));
    $oldHash = Hash::make('blacky', ['rounds' => 5]);
    var_dump($oldHash);
    var_dump(Hash::needsRehash($oldHash));
    var_dump(Hash::make('blacky'));
    return "Goodbye";
} )->middleware('verified');

Route::get('/rooms/{roomType?}', 'ShowRoomsController');

Route::resource('bookings', 'BookingController');

Route::resource('room_types', 'RoomTypeController');