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

Route::get('/', function () {
    return view('/pages/dashboard/index')->with([
        'title'=>'Dashboard',
        'subtitle'=>'Metrics'
    ]);
});

Route::get('users/login', function(){
    return view('pages.users.login')->with([
        'title'=>'Login',
        'subtitle'=>''
    ]);
})->name('login');

Route::get('calllogs', [App\Http\Controllers\CallLogController::class, 'index']);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('messages', App\Http\Controllers\TextMessageController::class);
Route::resource('media', App\Http\Controllers\MediaController::class);



