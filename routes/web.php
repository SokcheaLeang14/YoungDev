<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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
    return view('index');
});
Route::get('/student',function(){
    return view('student.index');
});

// Unauthenticated Users
Route::get('/login', [AuthenticateController::class, 'login']);
Route::post('/auth', [AuthenticateController::class, 'auth']);

// Authenticated Users
Route::middleware('auth')->group(function () {
    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users/create', [UsersController::class, 'create']);
    Route::post('/users/create', [UsersController::class, 'store']);
    Route::get('/users/edit/{id}', [UsersController::class, 'edit']);
    Route::post('/users/update/{id}', [UsersController::class, 'update']);
    Route::get('/users/destroy/{id}', [UsersController::class, 'destroy']);
});
