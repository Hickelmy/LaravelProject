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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create_function']);
Route::get('/about', [EventController::class, 'about']);
Route::get('/dashboard', [EventController::class, 'dashboard']);
Route::get('/login', [EventController::class, 'login']);
Route::get('/signup', [EventController::class, 'signup']);





Route::get('/welcome', function () {
    return view('welcome');
});
