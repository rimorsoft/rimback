<?php

/*
|--------------------------------------------------------------------------
| Rimback Routes
|--------------------------------------------------------------------------
|
| This is where the rimback web routes are. This is something great!
|
*/

Route::get('posts', 'Rimorsoft\Rimback\Http\Controllers\PostController@index');


/**
 * Login
 */

// Authentication Routes...
Route::get('login', 'Rimorsoft\Rimback\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Rimorsoft\Rimback\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'Rimorsoft\Rimback\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Rimorsoft\Rimback\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Rimorsoft\Rimback\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Rimorsoft\Rimback\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Rimorsoft\Rimback\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Rimorsoft\Rimback\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Rimorsoft\Rimback\Http\Controllers\Auth\ResetPasswordController@reset');
