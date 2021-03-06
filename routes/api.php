<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register',[AuthController::class, 'register'] )->name("register");
Route::post('/login',[AuthController::class, 'login'] )->name("login");

Route::resource('post', PostController::class)->except([
    'create', 'edit'
]);



Route::middleware('auth:sanctum')->group( function () {
   /*  Route::resource('/post', PostController::class)->except([
        'create', 'edit'
    ]);
 */
});




























Route::get('/teste', function(){
    return "hello world Update and i understand";
});
