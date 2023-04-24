<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::group(['prefix' => 'lt'], function (){
    Route::get('/apiemus', [App\Http\Controllers\HomeController::class, 'ltindex'])->name('lt.apiemus');
    Route::get('/kontaktai', [App\Http\Controllers\HomeController::class, 'ltkontaktai'])->name('lt.kontaktai');

});
// Route::group(['prefix' => 'alt'], function (){
//    Auth::routes();
// });
// Route::get('/lt/apiemus', [App\Http\Controllers\HomeController::class, 'index'])->name('lt.apiemus');


Route::group(['prefix' => 'en'], function (){
    Route::get('/apiemus', [App\Http\Controllers\HomeController::class, 'enindex'])->name('en.apiemus');
    Route::get('/kontaktai', [App\Http\Controllers\HomeController::class, 'enkontaktai'])->name('en.kontaktai');
});


// Route::group(['prefix' => 'aen'], function (){
//     Auth::routes();
// });

