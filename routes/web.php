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
Route::get('/register',[AuthController::class, 'register'] )->name("register");
Route::get('/login',[AuthController::class, 'login'] )->name("login");





Route::middleware('auth:sanctum')->group( function () {
    Route::resource('/get', PostController::class)->except([
        'create', 'edit'
    ]);

});




























Route::get('/teste', function(){
    return "hello world Update and i understand";
});



Route::get('/', function () {
    return view('welcome');
});
