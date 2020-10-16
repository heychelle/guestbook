<?php

use App\Http\Controllers\EventController;
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

// Route::get('/',[EventController::class,'index'])->name('index');
// Route::get('edit{event}', [EventController::class,'edit'])->name('event.edit');

// nama view itu folder view yg ada di resource
// Route::view('/', 'welcome');
// Route::view('/index', 'home');

// Route::view('add', 'event.addEvent')->name('addEvent');
// Route::post('add', [EventController::class, 'store'])->name('event.store');

// Route::view('/header', 'header.header_page');
// Route::view('/dalam', 'header.dalam.header_dalam');

// Route::patch('update/{event}',[EventController::class,'update'])->name('event.update');
// Route::delete('delete/{event}',[EventController::class,'destroy'])->name('event.delete');

Route::resource('event', EventController::class);