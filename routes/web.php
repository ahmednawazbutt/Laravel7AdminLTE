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
    return view('welcome');
});
Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// routes with admin prefix
Route::prefix('admin')->group(function () {
    
    Auth::routes(); // auth route has "admin/" prefix monw in url
    
    // mcontrollers within App\Http\Controllers\Admin namespace  
    Route::namespace('Admin')->group(function () {

        // routes with admin prefix and Auth Middleware implemeted
        Route::middleware(['auth'])->group(function() {
            Route::get('users', 'AdminController@index')->name('index'); // route becomes admin.index
        });
    });
});

Route::get('my-profile', 'UserController@viewProfile')->name('myProfile'); // see my profile




