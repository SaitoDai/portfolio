<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ItemController::class)
    ->name('users.')->group(function(){
        Route::get('profile', 'profile')->name('profile');
        Route::get('login', 'getLogin')->name('getLogin');
        Route::post('login', 'login')->name('login');
        Route::get('logout', 'logout')->name('logout');
    })
    ->name('items.')->group(function(){
        Route::get('', 'index')->name('index');
        Route::middleware('admin')->group(function(){
            Route::get('create', 'create')->name('create'); 
            Route::get('show={image}/edit', 'edit')->name('edit'); 
            Route::patch('show={image}/update', 'update')->name('update');   
        });
    })
    ->name('images.')->group(function(){
        Route::post('create/image', 'imageStore')->name('store');
        Route::get('show={image}', 'imageShow')->name('show');
    })
    ->name('videos.')->group(function(){
        Route::post('create/video', 'videoStore')->name('store');
        Route::get('show={video}', 'videoShow')->name('show');
    });

    