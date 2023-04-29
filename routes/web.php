<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Shared\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\InHomeMiddleware;
use App\Http\Middleware\InLoginMiddleware;
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

// Route::middleware([InLoginMiddleware::class])->group(function () {
    Route::get('/', [AuthController::class , 'index']);
    Route::get('/login' , [AuthController::class , 'login_page']);
    Route::post('/sign-in' , [AuthController::class , 'sign_in']);
    Route::get('/sign-up' , [AuthController::class , 'signup_page']);
    Route::post('/register' , [AuthController::class , 'register']);
// });



// Route::middleware([InHomeMiddleware::class])->group(function () {
    Route::get('/acp' , function() { return view('admin.index'); });

    Route::resource('category' , CategoryController::class);
// });
