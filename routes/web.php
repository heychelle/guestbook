<?php

use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\UserController as UUsercontroller;
use App\Listeners\ActivationListener;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/',function(){
    return redirect()->route('event.index');
});


Route::resource('event', EventController::class);
Route::get('activate',[ActivationController::class, 'activate'])->name('activate');


//Route::resource('user', UserController::class)->middleware('admin');
//Route::resource('user', UserController::class);

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::resource('user', Usercontroller::class);
    Route::resource('event', AdminEventController::class);
});
Route::group(['middleware' => 'creator', 'prefix' => 'creator,', 'as' => 'creator.'], function (){
});
Route::group(['middleware' => 'user','prefix' => 'user,', 'as' => 'user.'], function (){
    Route::resource('user', UUserController::class);
});

Route::resource('image', ImageController::class);
// Route::get('/', [StudentController::class, 'index'])->name('index');
// Route::get('student/{student}',[StudentController::class, 'edit'])->name('student.edit');
// Route::patch('update/{student}',[StudentController::class, 'update'])->name('student.update');
// Route::delete('delete/{student}',[StudentController::class,'destroy'])->name('student.destroy');

// Route::view('addStudent', 'student.addEvent')->name('student.create');
// Route::post('create', [StudentController::class,'store'])->name('student.store');



Route::resource('student', StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
