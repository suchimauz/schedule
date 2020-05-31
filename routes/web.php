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

Route::resource('/group', 'GroupController', array('except' => array('create', 'edit')));
Route::resource("group.schedule", "ScheduleController", [
    'parameters' => 'singular',
    'except' => array('create', 'edit')
]);
