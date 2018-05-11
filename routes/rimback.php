<?php

/*
|--------------------------------------------------------------------------
| Rimback Routes
|--------------------------------------------------------------------------
|
| This is where the rimback web routes are. This is something great!
|
*/

$namespace = config('rimback.namespace.controllers');

Route::get('posts', $namespace . 'PostController@index');


/**
 * Login
 */

// Authentication Routes...
Route::get('login', $namespace . 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', $namespace . 'Auth\LoginController@login');

Route::post('logout', $namespace . 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', $namespace . 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', $namespace . 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', $namespace . 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', $namespace . 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', $namespace . 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', $namespace . 'Auth\ResetPasswordController@reset');
