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

Route::get('/content', function () {
    return view('content');
});
Route::get('/search', function () {
    return view('search');
});
Route::middleware('auth:sanctum')->get('/volunteer', function () {
    return view('volunteer');
});
Route::get('/content/{id}', function ($id) {
    return view('medicine');
});
Route::get('/', function () {
    return redirect('content');
});
Auth::routes();
/*

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
