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
    return redirect()->route('notifications.create');
});
Route::post(
    '/subscribers/register',
    ['uses' => 'SubscribersController@register',
        'as' => 'subscribers.register']
);
Route::get(
    '/notifications/create',
    ['uses' => 'NotificationsController@create',
        'as' => 'notifications.create']
);
Route::post(
    '/notifications/send',
    ['uses' => 'NotificationsController@send',
        'as' => 'notifications.send']
);