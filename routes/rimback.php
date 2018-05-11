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


/**
 * Pages
 */

Route::get('posts', $namespace . 'PostController@index');