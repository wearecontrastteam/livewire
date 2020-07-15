<?php

use Illuminate\Support\Facades\Route;

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

if ( \App::environment( 'local' ) ) {
    Route::get( '/test', function () {

    } );
}

Route::view( '/', 'welcome');

Route::livewire('/counter', 'counter')->name('counter');
Route::livewire('/data-binding', 'data-binding')->name('data-binding');
Route::livewire('/action', 'action')->name('action');
Route::livewire('/events', 'events')->name('events');
Route::livewire('/mount', 'mount')->name('mount');
Route::livewire('/search', 'search')->name('search');
